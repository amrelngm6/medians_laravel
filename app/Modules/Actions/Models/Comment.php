<?php

namespace App\Modules\Actions\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Uploads\Models\Upload;

class Comment extends Model
{
    
    protected $table = 'comments';

    protected $fillable = ['business_id', 'message', 'user_id', 'user_type', 'model_id', 'model_type', 'status_id'];

    /**
     * Load related Tasks as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    /**
     * Load assigneed Team members
     */    
    public function user()
    {
        return $this->morphTo();
    }

    
    /**
     * Load assigneed Team members
     */    
    public function file()
    {
        return $this->hasOne(Upload::class,'model_id','id')->where('model_type',get_class($this));
    }

    
    


}
