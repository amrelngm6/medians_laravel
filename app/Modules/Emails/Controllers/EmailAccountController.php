<?php

namespace App\Modules\Emails\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Emails\Services\EmailAccountService;
use App\Modules\Emails\Services\EmailMessageService;
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
            $priorities = $this->service->priorities();

            $messageService = new EmailMessageService();
            $messages = $messageService->accountMessages($account, $folder->name ?? null, 20, $request->page ?? 1);
            $messagesPaginate = $messages->toArray();

            return view('emails::row', compact('messages', 'folder', 'messagesPaginate', 'account','priorities', 'user'));
            
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
            $days = $account->field('since_days')->first()->value ?? 7 ;
            $limit = $account->field('fetch_limit')->first()->value ?? 20 ;
            $folder = $this->service->findFolder($request->get('folder') ?? ($account->folder->id ?? 0), $account);
            $saveMessages = $this->service->connect($account)->fetchMessages($folder->name, $account, $days, $limit);

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

    public function createFolder(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount create') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $account = $this->service->findAccount($id);
        
        return view('emails::create-folder', compact('user', 'account'));
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

    
    public function settings(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $account = $this->service->findAccount($id);

        return view('emails::settings', compact('user', 'account'));
    }

    

    public function show(Request $request, $accountId)
    {
        try {
            
            $account = $this->service->findAccount($accountId);
            $folder = $this->service->findFolder($request->get('folder') ?? 0, $account);

            if (!$folder)
                throw "Error Processing Request";
                
            
            $folders = $this->service->accountFolders($account);
            $priorities = $this->service->priorities();

            return view('emails::list', compact('account', 'folder', 'folders', 'priorities'));
            
        } catch (\Throwable $th) {
            return redirect(route('EmailAccount.show', $accountId).'?folder='.$account->folder->id);
        }
    }
    



    public function store(Request $request)
    {
        try 
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

            
        } catch (\Throwable $th) {
            //throw $th;
            
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }

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

        try {
                
            $account = $this->service->findAccount($accountId);

            $email = ['email' => $request->imap_username];

            $account = $this->service->updateEmailAccount($accountId, array_merge($email, $request->only('imap_host', 'imap_username', 'imap_password', 'imap_port')));

            $fetchFolders = $this->service->connect($account)->fetch();

            return $fetchFolders ? response()->json([
                'success' => true,
                'reload' => false,
                'no_reset' => true,
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


    

    public function updateSetting(Request $request, $accountId)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'fields.since_days' => 'required|integer|min:1|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 402);
        }

        try {
                
            $account = $this->service->findAccount($accountId);

            $fields = $this->service->storeCustomFields($account, $request->fields);

            return $fields ? response()->json([
                'success' => true,
                'reload' => false,
                'no_reset' => true,
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


    public function destroy($accountId)
    {
        try 
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
                
        } catch (\Throwable $th) {
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }
    }



    /**
     * Create new folder
     */
    public function storeFolder(Request $request, $id)
    {
        try 
        {
            $user = Auth::user();

            if ($user->cannot('EmailAccount create') && Auth::guardName() != 'superadmin') {
                abort(401, 'Unauthorized');
            }

            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Validation failed',
                    'errors' => $validator->errors()
                ], 422);
            }

            $account = $this->service->findAccount($id);

            $creator = [
                'business_id' => $user->business_id ?? 0,
                'account_id' => $id,
                'email' => $account->email,
            ];

            $emailAccount = $this->service->connect($account)->createFolder(array_merge($request->only('name'), $creator));

            $fetchFolders = $this->service->connect($account)->fetch();

            return $fetchFolders ? response()->json([
                'success' => true,
                'title' => 'Done',
                'reload' => true,
                'result' => 'Created',
            ], 200) : null;

            
        } catch (\Throwable $th) {
            //throw $th;
            
            return response()->json([
                'success' => false,
                'error' => $th->getMessage(),
            ], 402);
        }

    }



    public function deleteFolder(Request $request, $folderId, $accountId)
    {
        try {

        
            $user = Auth::user();

            if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
                abort(401, 'Unauthorized');
            }
    
            $account = $this->service->findaccount($accountId);
    
            $delete = $this->service->connect($account)->deleteFolder($folderId);
    
            return $delete ? response()->json([
                'success' => true,
                'reload' => true,
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



    
}