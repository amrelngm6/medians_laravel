<?php

namespace App\Modules\HR\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;
use App\Modules\Core\Models\ModelField;


class Attendance extends Model
{
    
    protected $table = 'hr_attendance';

    protected $fillable = ['business_id', 'shift_id', 'user_type', 'user_id', 'check_in', 'check_out', 'hours_duration',  'ip', 'platform', 'notes'];

    
    public function getDateAttribute()
    {
        return $this->check_in ? date('Y-m-d', strtotime($this->check_in)) : null;
    }
    
    /**
     * Load related Shift
     */
    public function shift()
    {
        return $this->hasOne(Shift::class, 'id', 'shift_id');
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
    public function user()
    {
        return $this->morphTo();
    }

    

    /**
     * Load User Attendance
     */
    public function month_list($month, $user)
    {
        return $this->forUser($user)->whereDate('check_in', '>=', date('Y-m-d', strtotime($month)))->select('check_in','check_out',  DB::raw('DATE(check_in) AS date'))->get()->groupBy('date');

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
