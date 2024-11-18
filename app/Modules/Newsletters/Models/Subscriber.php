<?php

namespace App\Modules\Newsletters\Models;

use Illuminate\Database\Eloquent\Model;


class Subscriber extends Model
{
    
    protected $table = 'newsletter_subscribers';

    protected $fillable = ['business_id', 'newsletter_id', 'name', 'email', 'status'];


}
