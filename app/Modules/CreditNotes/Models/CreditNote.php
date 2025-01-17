<?php

namespace App\Modules\CreditNotes\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Core\Models\ModelFile;
use App\Modules\Core\Models\ModelField;
use App\Modules\Core\Models\Status;
use App\Modules\Customers\Models\Staff;



class CreditNote extends Model
{
    
    protected $table = 'credit_notes';

    protected $fillable = ['business_id', 'model_id', 'model_type', 'date', 'terms', 'admin_note', 'client_note', 'subtotal', 'tax_amount', 'total', 'code', 'currency_id', 'created_by', 'status_id'];

    /**
     * Load related Files as Morph
     */
    public function files()
    {
        return $this->morphMany(ModelFile::class, 'model');
    }
    
    /**
     * Load related fields as Morph
     */
    public function fields()
    {
        return $this->morphMany(ModelField::class, 'model');
    }
    
    
    /**
     * Load related Status as Morph
     */
    public function status()
    {
        return $this->hasOne(Status::class, 'status_id', 'status_id');
    }
    
    
    /**
     * Load related Status as Morph
     */
    public function user()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'created_by');
    }
    
    
    
    /**
     * Load related items as Morph
     */
    public function items()
    {
        return $this->hasMany(NoteItem::class, 'credit_note_id', 'id');
    }
    
    /**
     * Load related Model as Morph
     */
    public function model()
    {
        return $this->morphTo();
    }


    /**
     * Estimates of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }
}
