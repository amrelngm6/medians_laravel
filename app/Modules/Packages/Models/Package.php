<?php

namespace App\Modules\Packages\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Subscription class database queries
 */
class Package extends Model
{

	/*
	/ @var String
	*/
	protected $table = 'packages';

	protected $fillable = [
		'name',
		'description',
    	'payment_type',
    	'cost_month',
    	'cost_quarter',
    	'cost_year',
    	'status',
    	'created_by',
	];

    public $appends = ['feature', 'is_paid'];

	public function getIsPaidAttribute()
	{
		return $this->payment_type == 'paid' ? true : null;
	}

	public function getFeatureAttribute()
	{
		return !empty($this->features) ? array_column($this->features->toArray(), 'value', 'code') : [];
	}

	public function features()
	{
		return $this->hasMany(PackageFeature::class, 'package_id', 'id');
	}


}
