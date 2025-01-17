<?php

namespace App\Modules\Invoices\Models;

use Illuminate\Database\Eloquent\Model;
use App\Modules\Customers\Models\Client;
use App\Modules\Customers\Models\Staff;
use App\Modules\Core\Models\Status;
use App\Modules\Core\Models\Business;


class Invoice extends Model
{
    
    protected $table = 'invoices';

    protected $fillable = [
        'business_id', 
        'model_id', 
        'model_type', 
        'code', 
        'description', 
        'client_id', 
        'date', 
        'due_date', 
        'subtotal', 
        'tax_amount', 
        'discount_amount', 
        'total', 
        'currency_id', 
        'created_by', 
        'status_id'
    ];

    

    /**
     * Load related model as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }

    
    /**
     * Load related client
     */
    public function client()
    {
        return $this->hasOne(Client::class, 'client_id', 'client_id');
    }

    
    /**
     * Load related user
     */
    public function user()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
    }

    
    /**
     * Load related user
     */
    public function status()
    {
        return $this->hasOne(Status::class, 'status_id', 'status_id');
    }

    
    /**
     * Load related Business
     */
    public function business()
    {
        return $this->hasOne(Business::class, 'business_id', 'business_id');
    }

    
    /**
     * Load related items
     */
    public function items()
    {
        return $this->hasMany(InvoiceItem::class, 'invoice_id', 'id');
    }

    
    /**
     * Load Templates of Business Scope
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', [$businessId, 0]);
    }

}
