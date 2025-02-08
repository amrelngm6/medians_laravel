<?php

namespace App\Modules\Menu\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;


class Menu extends Model
{
    
    protected $table = 'menu';

    protected $fillable = ['business_id', 'name', 'route_name', 'icon', 'sort', 'parent_id', 'parent_title', 'role_id'];

    public $appends = ['text', 'href'];

    public function getTextAttribute()
    {
        return $this->name;
    }

    public function getHrefAttribute()
    {
        return Route::has($this->name) ? route($this->name) : '';
    }
    

    /**
     * Load child menu items 
     */
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id', 'id')->with('children');
    }

    /**
     * scope for business
     */
    public function scopeForBusiness($query, $business)
    {
        return $query->where('business_id', $business);
    }


}
