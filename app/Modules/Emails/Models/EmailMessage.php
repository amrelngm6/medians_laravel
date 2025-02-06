<?php

namespace App\Modules\Emails\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;


class EmailMessage extends Model
{
    
    protected $table = 'email_messages';

    protected $fillable = ['business_id', 'model_id', 'model_type', 'email', 'subject', 'sender_email', 'sender_name', 'cc', 'reply_to', 'folder_name', 'message_text', 'message_html','message_id', 'delivery_date', 'time', 'size'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }


    /**
     * Scope for Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
    

    /**
     * Scope for Business
     */
    public function scopeForEmail($query, $email)
    {
        return $query->where('email', $email);
    }

}
