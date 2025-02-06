<?php

namespace App\Modules\Emails\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Priorities\Models\Priority;


class EmailMessage extends Model
{
    
    protected $table = 'email_messages';

    protected $fillable = ['business_id', 'model_id', 'model_type', 'account_id', 'email', 'subject', 'sender_email', 'sender_name', 'cc', 'reply_to', 'folder_name', 'message_text', 'message_html','message_id', 'delivery_date', 'time', 'size'];

    /**
     * Load related category as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }


    /**
     * Get size of uploads by file type
     */
    public function groupEmailAccountSize()
    {
        $sizes = $this->where('email', $this->email)->get()->groupBy('message_id')->map(function ($item) {
            $sum = $item->sum('size');
            $kb = $sum ? number_format($sum /  1000, 2) : 0;
            $mb = $sum ? number_format($sum / 1000000, 2) : 0;
            $gb = $mb ? number_format($mb / 1000, 3) : 0;
            return ['mb'=>$mb, 'gb'=>$gb, 'kb'=>$kb];
        });
        return $sizes->sum('mb');
    }


    public function fileSizeText()
    {
        $size = $this->size;
        
        if (empty($size))
            return 0;

        if (($size = $this->size / 1000) && $size < 1000)
            return number_format($size, 2) .' KB';

        if (($size = $size / 1000) && $size < 1000)
            return number_format($size, 2) .' MB';
        
        if (($size = $size / 1000) && $size)
            return number_format($size, 2) .' GB';

        return $size;
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

    /**
     * Scope for Business
     */
    public function scopeForAccount($query, $account)
    {
        return $query->where('account_id', $account->id);
    }

}
