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

        $emails = $this->service->query($request, $user);
        
        $accounts = $this->service->accounts($user);

        $priorities = $this->service->priorities();

        return view('emails::select-account', compact('emails','priorities' , 'accounts', 'user'));
    }

    public function filter(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $emails = $this->service->query($request);
        $priorities = $this->service->priorities();

        return view('emails::list', compact('emails','priorities', 'user'));
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

        $emails = $this->service->find($id);

        return view('emails::edit', compact('user', 'emails'));
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
            'user_id' => $user->id ?? 0,
            'user_type' => get_class($user),
        ];

        $emails = $this->service->createEmail(array_merge($request->only('description', 'date', 'priority_id', 'completed'), $creator));

        return $emails ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        $emails = $this->service->find($id);
        return view('emails::show', compact('emails'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('EmailAccount edit') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'completed' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'result' => $validator->errors(),
            ], 402);
        }

        $update = $this->service->updateEmail($id, $request->only('description', 'date', 'priority_id', 'completed'));

        return $update ? response()->json([
            'success' => true,
            'reload' => false,
            'no_reset' => true,
            'title' => 'Done',
            'result' => 'Updated',
        ], 200) : null;
    }

    public function destroy($id)
    {
        $user = Auth::user();

        if ($user->cannot('Email delete') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $delete = $this->service->deleteEmail($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Email deleted successfully',
        ], 200) : null;
    }

    public function fetch(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Email view') && Auth::guardName() != 'superadmin') {
            abort(401, 'Unauthorized');
        }

        $delete = $this->service->fetch($request);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Emails list updated successfully',
        ], 200) : null;
    }
}
