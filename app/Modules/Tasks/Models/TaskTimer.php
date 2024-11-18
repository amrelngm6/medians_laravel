<?php

namespace App\Modules\Tasks\Models;

use Illuminate\Database\Eloquent\Model;

class TaskTimer extends Model
{

    protected $table = 'task_checklists';

    protected $fillable = [
        'business_id',
        'task_id',
        'date',
        'start_time',
        'end_time',
        'points',
        'sort',
        'user_id',
        'notes',
    ];

}
