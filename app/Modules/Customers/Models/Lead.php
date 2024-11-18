<?php

namespace App\Modules\Customers\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\LocationInfo;

class Lead extends Model
{

    protected $table = 'leads';

    protected $primaryKey = 'lead_id';

    protected $fillable = [
        
        'business_id',
        'first_name',
        'last_name',
        'picture',
        'email',
        'company',
        'about',
        'assigned_user',
        'source_id',
        'status',
        'created_by'
    ];

    
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
