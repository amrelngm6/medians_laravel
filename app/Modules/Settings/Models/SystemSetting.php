<?php

namespace App\Modules\Settings\Models;

use Illuminate\Database\Eloquent\Model;


class SystemSetting extends Model
{
    
    protected $table = 'system_settings';

    protected $fillable = ['code', 'value', 'created_by'];


}
