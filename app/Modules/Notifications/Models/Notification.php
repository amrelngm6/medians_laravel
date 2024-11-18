<?php

namespace App\Modules\Notifications\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Notification extends Model
{
    
    protected $table = 'languages';

    protected $fillable = ['business_id', 'event_id', 'receiver_type', 'receiver_id', 'model_type', 'model_id', 'subject', 'body', 'body_text', 'status'];


}
