<?php

namespace App\Modules\Packages\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Transaction class database queries
 */
class PackageTransaction extends Model
{

	/*
	/ @var String
	*/
	protected $table = 'package_transactions';


	protected $fillable = [

    	'subscription_id',
    	'package_id',
		'business_id',
        'payment_method',
        'amount',
        'date',
    	'status',
        'notes',
    	'creator_id',
    	'creator_type',
	];



}
