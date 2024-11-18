<?php

namespace App\Modules\Customers\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use App\Modules\Core\Models\LocationInfo;
use App\Modules\Customers\Models\Customer;
use App\Modules\Customers\Models\Task;

class Staff extends Authenticatable
{
    use Notifiable;

    protected $table = 'staff';

    protected $primaryKey = 'staff_id';

    protected $fillable = [
        
        'business_id',
        'first_name',
        'last_name',
        'picture',
        'email',
        'password',
        'job',
        'about',
        'role_id',
        'status',
        'created_by'
    ];

    public function customers()
    {
        return $this->morphMany(ModelMember::class, 'user')->with('model')->where('model_type', Customer::class);
    }
    
    
    /**
     * Load Staff tasks
     */
    public function tasks()
    {
        return $this->morphMany(ModelMember::class, 'user')->with('model')->where('model_type', Task::class);
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

