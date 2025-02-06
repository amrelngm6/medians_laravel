<?php

namespace App\Modules\Emails\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;


class EmailAccount extends Model
{
    
    protected $table = 'todos';

    protected $fillable = ['business_id', 'description', 'user_type', 'user_id', 'date', 'finished_time', 'sort',  'priority_id', 'completed'];

    /**
     * Load related category as Morph
     */
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Load related priority as Morph
     */
    public function priority()
    {
        return $this->hasOne(Priority::class, 'priority_id', 'priority_id'); 
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
    public function scopeUser($query, $user)
    {
        return $query
        ->where('user_id', $user->id())
        ->where('user_type', get_class($user));
    }

}
