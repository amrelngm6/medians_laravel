<?php

namespace App\Modules\Customers\Models;


use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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
        'password',
        'about',
        'lead_id',
        'assigned_user',
        'status',
        'created_by'
    ];


    public function customers()
    {
        return $this->hasMany(Customer::class, 'client_id', 'client_id');
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


}
