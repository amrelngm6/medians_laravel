<?php

namespace App\Modules\Announcements\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelMember;

class Announcement extends Model
{
    
    protected $table = 'announcements';

    protected $fillable = ['business_id', 'name', 'message', 'staff_access', 'client_access', 'is_private', 'model_id', 'model_type', 'created_by'];

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
    public function model()
    {
        return $this->belongsTo();
    }


}
