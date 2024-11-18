<?php

namespace App\Modules\Notifications\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Event extends Model
{
    
    protected $table = 'notification_events';

    protected $fillable = ['title', 'action', 'model', 'receiver_model','action_value','subject','template_id','body_text','status','created_by'];



}
