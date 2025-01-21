<?php

namespace App\Modules\Todos\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Modules\Todos\Services\TodoService;
use App\Modules\Todos\Events\TodoFormRendering;
use App\Http\Controllers\Controller;
use App\Models\Auth;

class TodoController extends Controller
{
    protected $todoService;

    public function __construct(TodoService $todoService)
    {
        $this->todoService = $todoService;
    }

    public function index(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Todo view') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $todos = $this->todoService->query($request);
        $priorities = $this->todoService->priorities();

        return view('todo::todo', compact('todos','priorities', 'user'));
    }

    public function create(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Todo create') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }
        
        $context = ['components' => []];
        // Fire the event
        $event = event(new TodoFormRendering($context, new $this->todoService->model));
        $components = $event[0]->context['components'] ?? [];


        return view('todo::create', compact('user', 'components'));
    }

    public function edit(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Todo edit') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $todo = $this->todoService->find($id);

        return view('todo::edit', compact('user', 'todo'));
    }

    public function store(Request $request)
    {
        $user = Auth::user();

        if ($user->cannot('Todo create') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $validator = Validator::make($request->all(), [
            'description' => 'required|string|max:255',
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

        $todo = $this->todoService->createTodo(array_merge($request->only('description', 'date', 'priority_id', 'completed'), $creator));

        return $todo ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Created',
        ], 200) : null;
    }

    public function show($id)
    {
        $todo = $this->todoService->find($id);
        return view('todo::show', compact('todo'));
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();

        if ($user->cannot('Todo edit') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
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

        $update = $this->todoService->updateTodo($id, $request->only('description', 'date', 'priority_id', 'completed'));

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

        if ($user->cannot('Todo delete') && Auth::guardName() != 'superadmin') {
            abort(403, 'Unauthorized');
        }

        $delete = $this->todoService->deleteTodo($id);

        return $delete ? response()->json([
            'success' => true,
            'reload' => true,
            'title' => 'Done',
            'result' => 'Todo deleted successfully',
        ], 200) : null;
    }
}
