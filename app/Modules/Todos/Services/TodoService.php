<?php

namespace App\Modules\Todos\Services;

use App\Modules\Todos\Models\Todo;
use App\Modules\Priorities\Models\Priority;
use App\Models\Auth;

class TodoService
{
    public $model;

    public function __construct(Todo $model)    
    {
        $this->model = $model;
    }

    public function query($request)
    {
        $user = Auth::user();
        $items = Todo::query();
        if ($request->has('priority_id')) {
            $items->where('priority_id', $request->priority_id);
        }
        
        if ($request->has('date')) {
            $items->where('date', date('Y-m-d', strtotime($request->date)));
        }
        return $items->where('user_id', $user->id)->paginate();
    }

    public function priorities()
    {
        $user = Auth::user();
        return Priority::default([$user->business_id ?? 0, 0])->where('model', Todo::class)->orderBy('sort')->get();
    }

    public function find(int $id)
    {
        return Todo::findOrFail($id);
    }

    public function createTodo(array $data)
    {
        return Todo::create($data);
    }

    public function updateTodo($id, array $data)
    {
        $todo = $this->find($id);
        $todo->update($data);
        return $todo;
    }

    public function deleteTodo($id)
    {
        $todo = $this->find($id);
        return $todo->delete();
    }
}
