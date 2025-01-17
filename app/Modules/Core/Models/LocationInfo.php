<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

class LocationInfo extends Model
{

    protected $table = 'location_info';

    protected $primaryKey = 'location_id';
    
    protected $fillable = [
        'business_id',
        'model_id',
        'model_type',
        'country', 
        'city', 
        'zip', 
        'state', 
        'address', 
        'zone', 
        'website', 
        'longitude', 
        'latitude', 
    ];

}
