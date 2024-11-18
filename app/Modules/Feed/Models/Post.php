<?php

namespace App\Modules\Feed\Models;

use Illuminate\Database\Eloquent\Model;


class Post extends Model
{
    
    protected $table = 'newsfeed_posts';

    protected $primaryKey = 'post_id';

    protected $fillable = ['business_id', 'content', 'user_type', 'user_id', 'visibility', 'type', 'pinned', 'status'];

    /**
     * Load related category as Morph
     */
    public function user()
    {
        return $this->belongsTo();
    }


}
