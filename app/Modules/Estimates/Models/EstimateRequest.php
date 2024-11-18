<?php

namespace App\Modules\Estimates\Models;

use Illuminate\Database\Eloquent\Model;

class EstimateRequest extends Model
{

    protected $table = 'estimate_requests';

    protected $fillable = ['business_id', 'user_id', 'user_type', 'message', 'assigned_to', 'estimate_id', 'date', 'status'];

}
