<?php

namespace App\Modules\WhatsApp\Models;

use Illuminate\Database\Eloquent\Model;


class Template extends Model 
{

	/*
	/ @var String
	*/
	protected $table = 'wp_templates';

	protected $fillable = [
    	'business_id',
    	'name',
    	'content',
	];



}
