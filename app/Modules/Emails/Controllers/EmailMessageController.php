<?php

namespace App\Modules\Emails\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Emails\Services\EmailAccountService;
use App\Modules\Emails\Services\EmailMessageService;
use App\Modules\Emails\Events\EmailFormRendering;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class EmailMessageController extends Controller
{
    protected $service;
    protected $accountService;

    public function __construct(EmailMessageService $service, EmailAccountService $accountService)
    {
        $this->service = $service;

        $this->accountService = $accountService;
    }

    public function filter(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            
            $account = $this->accountService->findAccount($accountId);
            $folder = $this->accountService->findFolder($request->get('folder') ?? $account->folder->id, $account);
            $messagesPaginate = $this->service->accountMessages($account, $folder->name ?? null, 20, $request->page ?? 1)->toArray();
            $messages = $this->service->accountMessages($account, $folder->name ?? null, 20, $request->page ?? 1);
            $priorities = $this->service->priorities();

            return view('emails::row', compact('messages', 'folder', 'messagesPaginate', 'account','priorities', 'user'));
            
        } catch (\Throwable $th) {
            
            return $th->getMessage();
        }

    }


    public function compose(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            
            $account = $this->service->findAccount($accountId);
            $priorities = $this->service->priorities();

            return view('emails::compose', compact('account','priorities', 'user'));
            
        } catch (\Throwable $th) {
            
            return $th->getMessage();
        }

    }


    public function showMessage(Request $request, $accountId, $msg_id)
    {
        $account = $this->accountService->findAccount($accountId);
        $folders = $this->accountService->accountFolders($account);
        $priorities = $this->accountService->priorities();
        $message = $this->service->findMessage($msg_id, $account);

        return view('emails::mail-details', compact('message', 'account', 'folders', 'priorities'));
    }


    public function moveMessage(Request $request, $msgId, $folderId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
                
            $folder = $this->service->findFolderById($folderId);
            
            $account = $this->accountService->findAccount($folder->account_id);

            $message = $this->service->findMessage($msgId, $account);

            $move = $this->service->connect($account)->moveMessage($folder->name, $message->id);

            return $move ? response()->json([
                'success' => true,
                'redirect' => route('EmailAccount.show', $account->id),
                'title' => 'Done',
                'result' => 'Updated',
            ], 200) : null;
            
        } catch (\Throwable $th) {
            //throw $th;
            
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }

    }


    public function destroy($accountId)
    {
        $user = Auth::user();

        if ($user->cannot('Email delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $delete = $this->service->deleteEmail($accountId);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Email deleted successfully',
        ], 200) : null;
    }




    /**
     * Send mail
     */
    public function send_mail(Request $request, $accountId )
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $account = $this->service->findAccount($accountId);

        try {
            
            return $this->service->sendMail($request->only('subject', 'message_text', 'email'), $account);
        
        } catch (\Throwable $th) {
            //throw $th;
            
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }

        // // Send Email
        // Mail::raw('This is a test email.', function ($message) use ($smtp, $request) {
        //     $message->to($request->email)
        //             ->subject('Test Email')
        //             ->from($smtp->mail_from_address, $smtp->mail_from_name);
        // });
    }
    
}
