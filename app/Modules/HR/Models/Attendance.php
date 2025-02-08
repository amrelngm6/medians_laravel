<?php

namespace App\Modules\HR\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;
use App\Modules\Core\Models\ModelField;


class Attendance extends Model
{
    
    protected $table = 'hr_attendance';

    protected $fillable = ['business_id', 'user_type', 'user_id', 'check_in', 'check_out', 'hours_duration',  'ip', 'platform', 'notes'];


    
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
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Scope for Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    

    /**
     * Scope for Business
     */
    public function scopeForUser($query, $user)
    {
        return $query
        ->where('user_id', $user->id())
        ->where('user_type', get_class($user));
    }

}
