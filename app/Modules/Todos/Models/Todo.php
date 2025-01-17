<?php

namespace App\Modules\Todos\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;


class Todo extends Model
{
    
    protected $table = 'todos';

    protected $fillable = ['business_id', 'description', 'user_type', 'user_id', 'date', 'finished_time', 'sort',  'priority_id', 'completed'];

    /**
     * Load related category as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Load related priority as Morph
     */
    public function priority()
    {
        return $this->hasOne(Priority::class, 'priority_id', 'priority_id'); 
    }


}
