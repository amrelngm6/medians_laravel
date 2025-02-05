<?php

namespace App\Modules\Actions\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Reminder extends Model
{
    
    protected $table = 'reminders';

    protected $fillable = ['business_id', 'name', 'description', 'date', 'user_id', 'user_type', 'model_id', 'model_type', 'is_notified'];

    /**
     * Load related Tasks as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }


    /**
     * Load assigneed Team members
     */    
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Load related Tasks as Morph
     */
    public function model_name()
    {
        return $this->model ? class_basename($this->model) : '';
    }

    /**
     * Load Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }


}
