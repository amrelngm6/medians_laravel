<?php

namespace App\Modules\Emails\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;


class EmailFolder extends Model
{
    
    protected $table = 'email_folders';

    protected $fillable = ['business_id', 'account_id', 'email', 'parent_folder', 'name'];

    /**
     * Load related email account
     */
    public function account()
    {
        return $this->hasOne(EmailAccount::class, 'email', 'email');
    }


    /**
     * Load related email account
     */
    public function messages()
    {
        return $this->hasMany(EmailMessage::class, 'folder_name', 'name')->where('account_id', $this->account_id);
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

    /**
     * Scope for Business
     */
    public function scopeForAccount($query, $account)
    {
        return $query->where('account_id', $account->id);
    }

}
