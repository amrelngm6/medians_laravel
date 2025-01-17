<?php

namespace App\Modules\Actions\Services;

use App\Modules\Actions\Models\Comment;
use App\Modules\Uploads\Services\UploadService;

class CommentService
{
    public function createComment(array $data, $file = null)
    {
        $comment = Comment::create($data);

        if ($file  != null) {
            $uploadService = new UploadService();
            $data ['model_id'] =  $comment->id;
            $data ['model_type'] = get_class($comment);
            $upload = $uploadService->createUpload($file, $data);
        }
            
        return $comment;
    }

    public function updateComment($id, array $data)
    {
        // Business logic for updating a Comment
        return Comment::where('id', $id)->update($data);
    }

    public function deleteComment($id)
    {
        // Business logic for deleting a Comment
        return Comment::where('id', $id)->delete();
    }
}
