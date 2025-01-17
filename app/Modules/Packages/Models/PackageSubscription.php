<?php

namespace App\Modules\Packages\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\Business;

/**
 * Subscription class database queries
 */
class PackageSubscription extends Model
{

	/*
	/ @var String
	*/
	protected $table = 'package_subscriptions';

    protected $primaryKey = 'subscription_id';

	protected $fillable = [
    	'package_id',
		'business_id',
		'staff_id',
        'start_date',
        'end_date',
        'duration',
        'payment_type',
        'payment_status',
        'total_cost',
        'notes',
        'status',
	];

    public $appends = ['is_paid', 'is_valid', 'is_expired', 'name', 'field'];

    
	public function getIsValidAttribute()
	{
		return (strtotime(date("Y-m-d")) <= strtotime($this->end_date)) ? (($this->payment_type == 'free' && $this->status != 'canceled') || $this->status == 'active') : false;
	}

    public function getIsExpiredAttribute()
	{
		return (strtotime(date("Y-m-d")) > strtotime($this->end_date));
	}
    
	public function getFieldAttribute()
	{
		// return !empty($this->scustom_fields) ? array_column($this->custom_fields->toArray(), 'value', 'code') : [];
	}

	public function custom_fields()
	{
		return $this->morphMany(CustomField::class, 'model');
	}

    public function getNameAttribute()
    {
        // return isset($this->package->name) ? $this->package->name : '';
    }

    public function getIsPaidAttribute()
    {
        return $this->payment_type == 'paid' ? true : null;
    }

    public function model()
    {
        return $this->morphTo();
    }

    public function package()
    {
        return $this->hasOne(Package::class, 'package_id', 'package_id');
    }

    // public function invoice()
    // {
    //     return $this->hasOne(Invoice::class, 'subscription_id', 'subscription_id');
    // }

    public function business()
    {
        return $this->hasOne(Business::class, 'business_id', 'business_id');
    }


}
