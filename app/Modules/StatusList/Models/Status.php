<?php

namespace App\Modules\StatusList\Models;

use Illuminate\Database\Eloquent\Model;


class Status extends Model
{
    
    protected $table = 'status_list';

    protected $primaryKey = 'status_id';

    protected $fillable = ['business_id', 'name', 'model', 'color', 'sort', 'created_by'];


}
