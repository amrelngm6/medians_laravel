<?php

namespace App\Modules\Todos\Models;

use Illuminate\Database\Eloquent\Model;


class Todo extends Model
{
    
    protected $table = 'todos';

    protected $fillable = ['business_id', 'description', 'user_type', 'user_id', 'date', 'finished_date', 'sort',  'priority', 'status'];

    /**
     * Load related category as Morph
     */
    public function user()
    {
        return $this->belongsTo();
    }


}
