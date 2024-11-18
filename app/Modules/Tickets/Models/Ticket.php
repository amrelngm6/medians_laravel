<?php

namespace App\Modules\Tickets\Models;

use Illuminate\Database\Eloquent\Model;


class Ticket extends Model
{
    
    protected $table = 'tickets';

    protected $primaryKey = 'ticket_id';

    protected $fillable = ['business_id', 'subject', 'message', 'project_id', 'client_seen', 'staff_seen', 'assigned_to', 'client_id', 'contact_id', 'department', 'priority', 'created_by', 'status'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->belongsTo();
    }


}
