<?php

namespace App\Modules\Projects\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectSetting extends Model
{

    protected $table = 'project_settings';

    protected $fillable = ['business_id', 'project_id', 'code', 'value'];

}
