<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class Module extends Model
{

    protected $table = 'modules';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'provider',
        'path',
        'has_settings',
        'business_access', 
        'limited_features',
        'is_enabled'
    ];

    public $appends = ['route_name', 'route_url'];

    public function getRouteUrlAttribute()
    {
        return Route::has($this->name) ? route($this->name) : '';
    }
    
    public function getRouteNameAttribute()
    {
        return Route::has($this->name) ? $this->name : '';
    }
    
    public static function getActive()
    {
        return Module::where('is_enabled', 1)->get();
    }
    
    public static function getActiveForBusiness()
    {
        return Module::where('is_enabled', 1)->where('business_access', 1)->get();
    }

    public static function getActiveHasSetting()
    {
        return Module::where('is_enabled', 1)->where('has_settings', 1)->get();
    }

}
