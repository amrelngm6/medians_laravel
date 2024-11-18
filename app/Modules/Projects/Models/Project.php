<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelMember;

class Project extends Model
{
    
    protected $table = 'projects';

    protected $primaryKey = 'project_id';
    

    protected $fillable = ['business_id', 'name', 'description', 'client_id', 'is_paid', 'total_cost', 'start_date', 'deadline_date', 'finished_date', 'status'];

    /**
     * Load related Tasks as Morph
     */
    public function tasks()
    {
        return $this->morphMany(Task::class, 'model');
    }

    /**
     * Load assigneed Team members
     */
    public function team()
    {
        return $this->morphMany(ModelMember::class, 'model');
    }

    
    /**
     * Load related Files as Morph
     */
    public function files()
    {
        return $this->morphMany(ModelFile::class, 'model');
    }
    
    /**
     * Load related fields as Morph
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model');
    }
    
    /**
     * Load related category as Morph
     */
    public function category()
    {
        return $this->morphOne(ModelCategory::class, 'model');
    }


}
