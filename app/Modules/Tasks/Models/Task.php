<?php

namespace App\Modules\Tasks\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Projects\Models\Project;
use App\Modules\Actions\Models\Comment;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\ModelMember;
use App\Modules\Core\Models\ModelField;

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
        'priority_id',
        'is_public',
        'is_paid',
        'points',
        'sort',
        'visible_to_client',
        'status_id',
        'created_by'
    ];

    
    public $appends = ['field', 'id'];
    
    public function getFieldAttribute()
    {
        return $this->fields->pluck('value', 'code');
    }
    
    public function getIdAttribute()
    {
        return $this->task_id;
    }

    public function id()
    {
        return $this->task_id;
    }
    
    public function progress()
    {
        $all = $this->checklist->count();
        $completed = $this->checklist->where('status' ,'1')->count();
        $percent = $all > 0 ? $completed / $all * 100 : 0;
        return $percent;
    }
    
    /**
     * Related Model as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }
    
    /**
     * Project assigneed Team members
     */
    public function checklist()
    {
        return $this->hasMany(TaskChecklist::class, 'task_id', 'task_id')->orderBy('sort', 'ASC');
    }

    /**
     * Project assigneed Team members
     */
    public function team()
    {
        return $this->morphMany(ModelMember::class, 'model')->with('user');
    }

    /**
     * Project related comments as Morph
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'model');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'model_id');
    }

    public function status()
    {
        return $this->hasOne(Status::class, 'status_id', 'status_id');
    }
    
    /**
     * Load All ModelField of Model
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model')->with('field');
    }





    
    /**
     * Duplicate a model with its relations
     * 
     * @param $model Model
     * @param $relations Array
     */
    public function deleteRelations($relations)
    {
        $data = [];
        foreach ($relations as $relation) {
            if ($this->$relation)
            {
                foreach ($this->$relation as $related) {
                    $data =  $related->delete();
                }
            }
        }
        return $data;
    }

    /**
     * Duplicate a model with its relations
     * 
     * @param $model Model
     * @param $relations Array
     */
    public function duplicateWithRelations($relations)
    {
        
        $data = array();
        $i = 0;
        $newModel = $this->replicate();
        $newModel->push(); // Save the duplicated model first
        
        foreach ($relations as $relation) {
            foreach ($this->$relation as $related) {
                if ($this->$relation) {
                    $newRelated = $related->replicate();
                    if (isset($newRelated->model_id)) {
                        $newRelated->model_id = $newModel->task_id; // Set new foreign key
                    } else {
                        $newRelated->task_id = $newModel->task_id; // Set new foreign key
                    }
                    $newRelated->push();
                    $data[$i] = $newRelated;
                    $i++;

                }

            }
        }


        return $newModel;
    }








    /**
     * Project related status as Morph
     */
    public function countByStatus($status)
    {
        $statusId = Status::where('name',$status)->first()->status_id ?? 0;
        return $this->where('status_id', $statusId)->where('model_id', $this->model_id)->where('model_type', $this->model_type)->where('business_id', $this->business_id)->count();
    }

    
    /**
     * Tasks Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
