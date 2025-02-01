<?php

namespace App\Modules\Announcements\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;

class Announcement extends Model
{
    
    protected $table = 'announcements';
    
    protected $fillable = ['business_id', 'name', 'description','start', 'end', 'client_access', 'staff_access', 'is_private', 'user_id', 'user_type',  'model_id', 'model_type'];

    /**
     * Load related Tasks as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    /**
     * Get Model Name
     */
    public function modelName()
    {
        return basename(str_replace('\\', '/', $this->model_type));
    }


    /**
     * Load Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    
}
