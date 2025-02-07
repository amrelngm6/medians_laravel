<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelMember;
use App\Modules\Core\Models\Status;
use App\Modules\Customers\Models\Client;
use App\Modules\Actions\Models\Comment;
use App\Modules\Tasks\Models\Task;
use App\Modules\Tasks\Models\TaskChecklist;
use App\Modules\Activities\Models\ActivityModel;

class Project extends Model
{
    
    protected $table = 'projects';

    protected $primaryKey = 'project_id';

    protected $fillable = ['business_id', 'name', 'description', 'client_id', 'is_paid', 'total_cost', 'start_date', 'deadline_date', 'finished_date', 'status_id', 'created_by'];

    
    public $appends = ['field'];
    
    public function getFieldAttribute()
    {
        return $this->fields->pluck('value', 'code');
    }
    

    /**
     * Project related Tasks as Morph
     */
    public function client()
    {
        return $this->hasOne(Client::class, 'client_id', 'client_id');
    }

    /**
     * Project related Tasks as Morph
     */
    public function tasks()
    {
        return $this->morphMany(Task::class, 'model');
    }

    /**
     * Project assigneed Team members
     */
    public function members()
    {
        return $this->tasks()->with('team')->get()->pluck('team')->flatten()->unique('user_id');
    }

    
    /**
     * Project related Files as Morph
     */
    public function activities($limit = 20)
    {
        
        $model = $this;
        return ActivityModel::where(function ($q) use ($model) {
            return $q->where('subject_type', Project::class)->where('subject_id', $model->project_id);
        })
        ->orWhere(function ($q) use ($model) {
            $q->where('subject_type', Task::class)
                  ->whereIn('subject_id', function ($q) use ($model) {
                      $q->select('task_id')
                            ->from('tasks')
                            ->where('model_id', $model->project_id)
                            ->where('model_type', get_class($model));
                  });
        })
        ->orWhere(function ($q) use ($model) {
            $q->where('subject_type', TaskChecklist::class)
                  ->whereIn('subject_id', function ($q) use ($model) {
                      $q->select('id')
                            ->from('task_checklists')
                            ->whereIn('task_id', function ($q) use ($model) {
                                $q->select('task_id')
                                    ->from('tasks')
                                    ->where('model_id', $model->project_id)
                                    ->where('model_type', get_class($model));

                      });
                  });
        })
        ->orderBy('id','DESC')
        ->latest()
        ->limit($limit)
        ->get();
    }
    
    
    /**
     * Project related Files as Morph
     */
    public function files()
    {
        return $this->morphMany(ModelFile::class, 'model');
    }
    
    /**
     * Project related fields as Morph
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model');
    }
    
    /**
     * Project related fields as Morph
     */
    public function field($code)
    {
        return $this->morphOne(ModelField::class, 'model')->where('code', $code);
    }
    
    
    /**
     * Project related comments as Morph
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'model');
    }
    
    /**
     * Project related category as Morph
     */
    public function category()
    {
        return $this->morphOne(ModelCategory::class, 'model');
    }

    public function progress()
    {
        $all = $this->tasks()->count();
        if (!$all)
            return 0;

        $completed = $this->tasks()->first()->countByStatus('Completed');
        $percent = $all > 0 ? $completed / $all * 100 : 0;
        return $percent;
    }
    

    
    /**
     * Project related status as Morph
     */
    public function countByStatus($status)
    {
        $statusId = Status::where('name',$status)->first()->status_id ?? 0;
        return $this->where('status_id', $statusId)->where('business_id', $this->business_id)->count();
    }

    /**
     * Project Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
