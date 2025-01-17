<?php

namespace App\Modules\Customers\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Modules\Core\Models\Business;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Customers\Models\Customer;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';

    protected $primaryKey = 'client_id';

    protected $fillable = [
        'business_id',
        'type',
        'first_name',
        'last_name',
        'picture',
        'email',
        'phone',
        'password',
        'about',
        'lead_id',
        'assigned_user',
        'status',
        'created_by'
    ];

    public $appends = ['name'];

    public function getNameAttribute() : String {
        return $this->first_name.' '.$this->last_name;
    }

    public function customers()
    {
        return $this->hasMany(Customer::class, 'client_id', 'client_id');
    }

    public function id()
    {
        return $this->client_id;
    }

    /**
     * Load Main Contact
     */
    public function contact()
    {
        return $this->morphOne(Contact::class, 'model');
    }

    /**
     * Load All Contacts of Client
     */
    public function contacts()
    {
        return $this->morphMany(Contact::class, 'model');
    }

    
    /**
     * Load Main Location info
     */
    public function location_info()
    {
        return $this->morphOne(LocationInfo::class, 'model');
    }

    
    /**
     * Business of Client
     */
    public function business()
    {
        return $this->hasOne(Business::class, 'business_id', 'business_id');
    }
    
    
    /**
     * Load Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
