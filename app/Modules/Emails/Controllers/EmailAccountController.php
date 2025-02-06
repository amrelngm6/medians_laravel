<?php

namespace App\Modules\Emails\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Emails\Services\EmailAccountService;
use App\Modules\Emails\Events\EmailFormRendering;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class EmailAccountController extends Controller
{
    protected $service;

    public function __construct(EmailAccountService $service)
    {
        $this->service = $service;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

                
        $accounts = $this->service->accounts($user);
        
        $priorities = $this->service->priorities();

        return view('emails::select-account', compact('priorities' , 'accounts', 'user'));
    }

    public function filter(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {
            
            $account = $this->service->findAccount($accountId);
            $folder = $this->service->findFolder($request->get('folder') ?? $account->folder->id, $account);
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


    public function fetch(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {

            $account = $this->service->findAccount($accountId);
            $folder = $this->service->findFolder($request->get('folder') ?? ($account->folder->id ?? 0), $account);
            $saveMessages = $this->service->connect($account)->fetchMessages($folder->name, $account, $request->days ?? 10);

            return $this->filter($request, $accountId);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function fetchFolders(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        try {

            $account = $this->service->findAccount($accountId);
            $fetchFolders = $this->service->connect($account)->fetch();

            return $this->filter($request, $accountId);

        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }
        
        return view('emails::create', compact('user'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $account = $this->service->findAccount($id);

        return view('emails::edit', compact('user', 'account'));
    }

    

    public function show(Request $request, $accountId)
    {
        $account = $this->service->findAccount($accountId);
        $folders = $this->service->accountFolders($account);
        $priorities = $this->service->priorities();

        return view('emails::list', compact('account', 'folders', 'priorities'));
    }
    

    public function showMessage(Request $request, $accountId, $msg_id)
    {
        $account = $this->service->findAccount($accountId);
        $folders = $this->service->accountFolders($account);
        $message = $this->service->findMessage($msg_id, $account);
        $priorities = $this->service->priorities();

        return view('emails::mail-details', compact('message', 'account', 'folders', 'priorities'));
    }


    public function store(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'imap_host' => 'required|string|max:255',
            'imap_username' => 'required|string|max:255',
            'imap_password' => 'required|string|max:255',
            'imap_port' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $creator = [
            'created_by' => $user->id(), 
            'business_id' => $user->business_id ?? 0,
            'email' => $request->imap_username ?? '',
            'user_id' => $user->id ?? 0,
            'user_type' => get_class($user),
        ];

        $emailAccount = $this->service->createEmailAccount(array_merge($request->only('imap_host', 'imap_username', 'imap_password', 'imap_port'), $creator));

        $folder = $this->service->connect($emailAccount)->fetch();

        return $folder ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function update(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'imap_host' => 'required|string|max:255',
            'imap_username' => 'required|string|max:255',
            'imap_password' => 'required|string|max:255',
            'imap_port' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 402);
        }
        $email = ['email' => $request->imap_username];
        $update = $this->service->updateEmailAccount($accountId, array_merge($email, $request->only('imap_host', 'imap_username', 'imap_password', 'imap_port')));

        $folder = $this->service->connect($emailAccount)->fetch();

        return $update ? response()->json([
            'success' => true,
            'reload' => false,
            'no_reset' => true,
            'title' => 'Done',
            'result' => 'Updated',
        ], 200) : null;
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
