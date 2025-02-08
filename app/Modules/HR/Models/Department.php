<?php

namespace App\Modules\HR\Models;

use App\Modules\Core\Models\Category;

class Department extends Category
{
    

    /**
     * Scope for Business
     */
    public function scopeForBusiness($query, $businessId)
    {
        return $query->where('business_id', $businessId)->where('model', Department::class);
    }

}
