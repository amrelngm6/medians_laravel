<?php

namespace App\Modules\Core\Models;

use Illuminate\Database\Eloquent\Model;

use App\Modules\Customers\Models\Staff;

class Business extends Model
{

    protected $table = 'businesses';

    protected $primaryKey = 'business_id';

    protected $fillable = [

        'name',
        'description',
        'owner_id',
        'category_id',
        'created_by', 
    ];

    
    /**
     * Load Roles of Business
     */
    public function owner()
    {
        return $this->hasOne(Staff::class, 'staff_id', 'owner_id');
    }
    
    
    /**
     * Related Category of Business
     */
    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    
    /**
     * Load Roles of Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId);
    }

}
