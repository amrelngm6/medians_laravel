<?php

namespace App\Modules\Notes\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

use App\Modules\Core\Models\ModelCategory;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelMember;

class Note extends Model
{
    
    protected $table = 'notes';

    protected $fillable = ['business_id', 'user_id', 'user_type',  'description', 'model_id', 'model_type'];

    public $appends = ['user_url','url'];

    public function getUrlAttribute()
    {
        $name = basename($this->model_type).'.tabs.notes';
        return Route::has($name) ? route($name, $this->model_id) : '#';
    }

    public function getUserUrlAttribute()
    {
        $name = basename($this->user_type).'.tabs.notes';
        return Route::has($name) ? route($name, $this->user_id) : '#';
    }


    /**
     * Note related Tasks as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Note related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    /**
     * Load Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

    /**
     * Note related category as Morph
     */
    public function canView($id, $class)
    {
        if (!$this->is_private || $this->staff_access)
            return true;
        
        if ($this->is_private && $this->user_id == $id && $this->user_id == $class)
            return true;

    }


}
