<?php

namespace App\Modules\Packages\Models;

use Illuminate\Database\Eloquent\Model;


/**
 * Subscription class database queries
 */
class PackageFeature extends Model
{

	/*
	/ @var String
	*/
	protected $table = 'package_features';

	protected $fillable = [
    	'package_id',
		'code',
        'value',
	];


    public function package()
    {
        return $this->hasOne(Package::class, 'package_id', 'package_id');
    }


}
