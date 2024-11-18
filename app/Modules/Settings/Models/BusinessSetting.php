<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;


class BusinessSetting extends Model
{
    
    protected $table = 'business_setting';

    protected $fillable = ['business_id', 'code', 'value', 'created_by'];


}
