<?php

namespace App\Modules\Tasks\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $table = 'tasks';

    protected $primaryKey = 'task_id';

    protected $fillable = [
        'business_id',
        'name',
        'description',
        'model_id',
        'model_type',
        'start_date',
        'due_date',
        'finished_date',
        'priority',
        'is_public',
        'is_paid',
        'points',
        'sort',
        'visible_to_client',
        'status',
        'created_by'
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
