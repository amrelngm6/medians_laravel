<?php

namespace App\Modules\CustomFields\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class CustomField extends Model
{
    
    protected $table = 'custom_fields';

    protected $fillable = [
        'business_id', 
        'title', 
        'placeholder', 
        'name', 
        'sort', 
        'type', 
        'class', 
        'default_value', 
        'help_text', 
        'options', 
        'is_required', 
        'is_disabled', 
        'show_at_table', 
        'show_at_overview', 
        'model', 
        'user_type',
        'user_id'
    ];

    /**
     * Load related Tasks as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }
    
    
    /**
     * Load Items of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
