<?php

namespace App\Modules\Countries\Models;

use Illuminate\Database\Eloquent\Model;


class Country extends Model
{
    
    protected $table = 'countries';

    protected $primaryKey = 'country_id';

    protected $fillable = ['name', 'short_name', 'iso2', 'iso3', 'code', 'created_by'];


}
