<?php

namespace App\Modules\Actions\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;

class Reminder extends Model
{
    
    protected $table = 'reminders';

    protected $fillable = ['business_id', 'description', 'date', 'user_id', 'user_type', 'model_id', 'model_type', 'is_notified', 'status'];

    /**
     * Load related Tasks as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }

    /**
     * Load assigneed Team members
     */    
    public function user()
    {
        return $this->belongsTo();
    }


    


}
