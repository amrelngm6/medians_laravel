<?php

namespace App\Modules\Customers\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use App\Modules\Core\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use App\Modules\Core\Models\Business;
use App\Modules\Core\Models\LocationInfo;
use App\Modules\Customers\Models\Customer;
use App\Modules\Packages\Models\Package;
use App\Modules\Packages\Models\PackageSubscription;
use App\Modules\Packages\Models\PackageFeatures;

class Staff extends Authenticatable
{
    use Notifiable, HasRoles;

    // protected $guard_name = 'staff'; 

    protected $table = 'staff';

    protected $primaryKey = 'staff_id';

    protected $fillable = [
        
        'business_id',
        'first_name',
        'last_name',
        'picture',
        'email',
        'phone',
        'password',
        'position',
        'about',
        'role_id',
        'status',
        'created_by'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    
    public $appends = ['name','id'];

    public function getNameAttribute() : String {
        return $this->first_name.' '.$this->last_name;
    }

    public function getIdAttribute() : String {
        return $this->staff_id;
    }


    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function getAuthPassword()
    {
        return $this->password;
    }

    public function id()
    {
        return $this->staff_id;
    }


    public function customers()
    {
        return $this->morphMany(ModelMember::class, 'user')->with('model')->where('model_type', Customer::class);
    }
    
    
    /**
     * Staff tasks
     */
    public function tasks()
    {
        return $this->morphMany(ModelMember::class, 'user')->with('model')->where('model_type', Task::class);
    }

    
    /**
     * Role of the Staff
     */
    public function role()
    {
        return $this->hasOne(Role::class, 'id', 'role_id');
    }

    /**
     * All Contacts of Client
     */
    public function subscription()
    {
        return $this->hasOne(PackageSubscription::class, 'business_id', 'business_id');
    }

    
    /**
     * Main Location info
     */
    public function location_info()
    {
        return $this->morphOne(LocationInfo::class, 'model');
    }

    
    /**
     * Roles of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

    
    /**
     * Roles of Business
     */
    public function business()
    {
        return $this->hasOne(Business::class, 'business_id', 'business_id');
    }
    
    
    /**
     * Roles of Business
     */
    public function scopeActiveForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId)->where('status', 1);
    }

}

