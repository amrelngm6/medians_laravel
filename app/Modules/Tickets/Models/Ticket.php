<?php

namespace App\Modules\Tickets\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\Category;
use App\Modules\Customers\Models\Staff;
use App\Modules\Actions\Models\Comment;


class Ticket extends Model
{
    
    protected $table = 'tickets';

    protected $fillable = ['business_id', 'subject', 'message', 'model_id', 'model_type', 'assigned_to', 'client_id', 'client_type',  'category_id', 'priority_id', 'status_id'];

    /**
     * Load related Model as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    public function id()
    {
        return $this->id;
    }


    /**
     * Load related Client as Morph
     */
    public function client()
    {
        return $this->morphTo();
    }

      /**
     * Project related comments as Morph
     */
    public function comments()
    {
        return $this->morphMany(Comment::class, 'model');
    }

    /**
     * Load related user
     */
    public function user()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'assigned_to');
    }

    
    /**
     * Load related status
     */
    public function status()
    {
        return $this->hasOne(Status::class, 'status_id', 'status_id');
    }
    
    /**
     * Load related category
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }

    
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', [$businessId, 0]);
    }   

}
