<?php

namespace App\Modules\Emails\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;
use App\Modules\Core\Models\ModelField;


class EmailAccount extends Model
{
    
    protected $table = 'email_accounts';

    protected $fillable = ['business_id',  'email', 'user_type', 'user_id', 'imap_host', 'imap_port',  'imap_encryption', 'imap_username', 'imap_password'];


    
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
     * Load related email account
     */
    public function folder()
    {
        return $this->hasOne(EmailFolder::class, 'account_id', 'id');
    }


    /**
     * Project related fields as Morph
     */
    public function field($code)
    {
        return $this->morphOne(ModelField::class, 'model')->where('code', $code);
    }

    // /**
    //  * Load related email since_days
    //  */
    // public function field($key)
    // {
    //     return $this->with(['fields'=> function($q) use ($key) {
    //         $q->where('code', $key);
    //     }]);
    // }


    /**
     * Load related email account
     */
    public function messages()
    {
        return $this->hasMany(EmailMessage::class, 'account_id', 'id');
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
