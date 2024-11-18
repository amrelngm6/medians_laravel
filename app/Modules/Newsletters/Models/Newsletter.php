<?php

namespace App\Modules\Newsletters\Models;

use Illuminate\Database\Eloquent\Model;


class Newsletter extends Model
{
    
    protected $table = 'newsletters';

    protected $primaryKey = 'newsletter_id';

    protected $fillable = ['business_id', 'name', 'created_by', 'status'];


    
    /**
     * Load related Messages
     */
    public function subscribers()
    {
        return $this->hasMany(Subscriber::class);
    }


}
