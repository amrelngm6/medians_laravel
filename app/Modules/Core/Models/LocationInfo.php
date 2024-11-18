<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class LocationInfo extends Model
{

    protected $table = 'location_info';

    protected $fillable = [
        'business_id',
        'location_id',
        'model_id',
        'model_type',
        'country', 
        'city', 
        'zip', 
        'state', 
        'address', 
        'zone', 
        'longitude', 
        'latitude', 
    ];

}
