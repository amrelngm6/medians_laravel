<?php

namespace App\Modules\Tasks\Models;

use Illuminate\Database\Eloquent\Model;

class TaskChecklist extends Model
{

    protected $table = 'task_checklists';

    protected $fillable = [
        'business_id',
        'task_id',
        'description',
        'finished',
        'finished_date',
        'points',
        'sort',
        'user_id',
        'visible_to_client',
        'status',
        'created_by'
    ];

}
