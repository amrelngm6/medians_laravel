<?php

namespace App\Modules\Actions\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modules\Actions\Services\CommentService;
use Illuminate\Support\Facades\Validator;
use App\Models\Auth;

class CommentController extends Controller
{
    
    protected $commentService;

    public function __construct(CommentService $commentService)
    {
        $this->commentService = $commentService;
    }

    public function index()
    {
        // List all Comments
    }

    public function store(Request $request )
    {
        try {
            // Validate incoming request data
            $validator = Validator::make($request->all(), [
                'message' => 'required|string',
            ]);

            if ($validator->fails()) {
                return $this->hasError($validator->errors(), 'Validation Error');
            }
            
            $user = Auth::user();

            $creator = ['user_id'=>$user->staff_id, 'user_type' => get_class($user), 'business_id'=>$user->business_id];

            // Create and save the Comment
            $comment = $this->commentService->createComment(array_merge($creator, $request->only('message', 'user_type', 'user_id', 'model_id', 'model_type', 'status_id')), $request->file);

            return $comment ? $this->jsonResponse('Created successfully') : null;
            
        } catch (\Throwable $th) {
            return $this->hasError($th->getMessage(), 'Validation Error');
        }
    }

    public function show($id)
    {
        // Display a single Comment
    }

    public function update($id)
    {
        // Update the specified Comment
    }

    public function destroy($id)
    {
        // Delete the specified Comment
    }
}
