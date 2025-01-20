<?php

namespace App\Modules\Proposals\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Core\Models\Status;

class Proposal extends Model
{
    
    protected $table = 'proposals';

    protected $fillable = ['business_id', 'title', 'content', 'model_type', 'model_id', 'user_type', 'user_id', 'date', 'expiry_date', 'currency_id', 'subtotal', 'discount_amount'. 'tax_amount', 'total', 'created_by', 'status_id'];


    /**
     * Relation with Model as morphTo
     */
    public function model()
    {
        return $this->morphTo();
    }

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
     * Relation with User as morphTo
     */
    public function status()
    {
        return $this->hasOne(Status::class, 'status_id','status_id');
    }

    public function modelName()
    {
        return basename(str_replace('\\', '/', $this->model_type));
    }

    /**
     * Estimates of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
