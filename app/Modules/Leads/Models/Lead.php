<?php

namespace App\Modules\Leads\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\LocationInfo;
use App\Modules\Customers\Models\Staff;
use App\Modules\Leads\Models\LeadSource;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\ModelField;
use App\Modules\Tasks\Models\Task;
use App\Modules\Deals\Models\Deal;

class Lead extends Model
{

    protected $table = 'leads';

    protected $primaryKey = 'lead_id';

    protected $fillable = [
        
        'business_id',
        'type',
        'first_name',
        'last_name',
        'email',
        'phone',
        'position',
        'company',
        'about',
        'assigned_to',
        'source_id',
        'status',
        'created_by'
    ];

    
    public $appends = ['field', 'name'];

    public function getFieldAttribute()
    {
        return $this->fields->pluck('value', 'code');
    }

    public function getNameAttribute() : String {
        return $this->first_name.' '.$this->last_name;
    }

    /**
     * Load Main Contact
     */
    public function source()
    {
        return $this->hasOne(LeadSource::class, 'source_id', 'source_id');
    }

    /**
     * Load Main Contact
     */
    public function deal()
    {
        return $this->hasOne(Deal::class, 'lead_id', 'lead_id');
    }

    /**
     * Load Status Model
     */
    public function status_model()
    {
        return $this->hasOne(Status::class, 'status_id', 'status');
    }

    /**
     * Load Assigned staff
     */
    public function assigned()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'assigned_to');
    }

    /**
     * Load All Contacts of Client
     */
    public function contacts()
    {
        return $this->morphMany(Contact::class, 'model');
    }
    
    /**
     * Load All Contacts of Client
     */
    public function tasks()
    {
        return $this->morphMany(Task::class, 'model');
    }

    /**
     * Load All ModelField of Model
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model')->with('field');
    }

    
    /**
     * Load Main Location info
     */
    public function location_info()
    {
        return $this->morphOne(LocationInfo::class, 'model');
    }

        
    /**
     * Load Items of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    
}
