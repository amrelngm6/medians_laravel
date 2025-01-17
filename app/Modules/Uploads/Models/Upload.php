<?php

namespace App\Modules\Uploads\Models;

use App\Modules\Core\Models\ModelFile;
use Illuminate\Support\Facades\Storage;
use App\Modules\Actions\Models\Comment;

class Upload extends ModelFile
{
    /**
     * Get size of uploads by file type
     */
    public function groupFilesSize()
    {
        $sizes = $this->whereIn('filetype', ['pdf', 'doc', 'docx', 'xlsx', 'xlx', 'txt', 'ppt', 'psd', 'rar' ])->get()->groupBy('filetype')->map(function ($item) {
            $sum = $item->sum('size');
            $mb = $sum ? number_format($sum / 1000000, 2) : 0;
            $gb = $mb ? number_format($mb / 1000, 3) : 0;
            return ['mb'=>$mb, 'gb'=>$gb];
        });
        return $sizes;
    }

    public function fileSizeText()
    {
        $size = $this->size;
        
        if (empty($size))
            return 0;

        if (($size = $this->size / 1000) && $size < 1000)
            return number_format($size, 2) .' KB';

        if (($size = $size / 1000) && $size < 1000)
            return number_format($size, 2) .' MB';
        
        if (($size = $size / 1000) && $size)
            return number_format($size, 2) .' GB';

        return $size;
    }


    // Additional model logic if needed
    public function scopeForBusiness($query, $business)
    {
        return $query->where('business_id', $business);
    }

    public function scopeProject($query, $model_id, $model_type)
    {
        $project = (new $model_type)->find($model_id);
        $query = $query->where('model_id', $model_id)->where('model_type', $model_type) ;

        $commentsIds = array_map( function($arr) {return $arr[0]['id'];}, array_filter($project->tasks->pluck('comments')->toArray()));
        if ($commentsIds) {
            $query = $query->orWhere('model_type', Comment::class)->whereIn('model_id', $commentsIds);
        }
        return $query;
    }

}
