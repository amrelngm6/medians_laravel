<?php

namespace App\Modules\Proposals\Models;

use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    
    protected $table = 'proposals';

    protected $fillable = ['business_id', 'title', 'content', 'model_type', 'model_id', 'user_type', 'user_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount'. 'tax_amount', 'total', 'created_by', 'status_id'];


    /**
     * Relation with User as morphTo
     */
    public function user()
    {
        return $this->morphTo();
    }

    /**
     * Relation with User as morphTo
     */
    public function items()
    {
        return $this->hasMany(ProposalItem::class, 'proposal_id','id');
    }


    /**
     * Estimates of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
