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


    public function compose(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            
            $account = $this->accountService->findAccount($accountId);
            $priorities = $this->accountService->priorities();

            return view('emails::compose', compact('account','priorities', 'user'));
            
        } catch (\Throwable $th) {
            
            return $th->getMessage();
        }

    }


    public function showMessage(Request $request, $accountId, $msg_id)
    {
        try {
            
            $account = $this->accountService->findAccount($accountId);
            $folders = $this->accountService->accountFolders($account);
            $priorities = $this->accountService->priorities();
            $message = $this->service->findMessage($msg_id, $account);
            $folder = $message->with(['folder'=> function($q) use ($account) {
                return $q;
            }])->find($message->id)->folder;

            $message->update(['read'=>1]);

            return view('emails::mail-details', compact('message', 'account', 'folder', 'folders', 'priorities'));
        } catch (\Throwable $th) {
            return redirect(route('EmailAccount'));
        }
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
                'reload' => true,
                'title' => 'Done',
                'result' => 'Updated',
            ], 200) : null;
            
        } catch (\Throwable $th) {
            
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }

    }


    
    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {

            $message = $this->service->findById($id);
                
            $account = $this->accountService->findAccount($message->account_id);

            $update = $this->service->updateEmailMessage($message->id, array_merge($request->only('favourite', 'read')));

            return null;
            
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }

    }


    public function destroy(Request $request, $id)
    {
        try 
        {
            $user = Auth::user();

            if ($user->cannot('EmailAccount delete') && Auth::guardName() != 'superadmin') {
                abort(401, 'Unauthorized');
            }

            $message = $this->service->findById($id);
            $folder = $message->with(['folder'=> function($q) use ($message) {
                return $q->where('account_id', $message->id);
            }])->find($message->id)->folder;
    
            $account = $this->accountService->findAccount($message->account_id);

            $delete = $this->service->connect($account)->deleteEmailMessage($id);

            return $delete ? response()->json([
                'success' => true,
                'redirect' => route('EmailAccount.show', $account->id).'?folder='.$message->folder->id,
                'title' => 'Done',
                'result' => 'Email deleted successfully',
            ], 200) : null;
                
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }
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
        
        try {
            
            $account = $this->accountService->findAccount($accountId);
            
            return $this->service->sendMail($request->only('subject', 'message_text', 'email'), $account);
        
        } catch (\Throwable $th) {
            
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }
    }
    
}
