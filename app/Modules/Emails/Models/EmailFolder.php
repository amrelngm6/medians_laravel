<?php

namespace App\Modules\Emails\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;


class EmailFolder extends Model
{
    
    protected $table = 'email_folders';

    protected $fillable = ['business_id', 'email', 'parent_folder', 'name'];

    /**
     * Load related email account
     */
    public function account()
    {
        return $this->hasOne(EmailAccount::class, 'email', 'email');
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
    public function scopeForEmail($query, $email)
    {
        return $query->where('email', $email);
    }

}
