<?php

namespace App\Modules\Menu\Services;

use App\Modules\Menu\Models\Menu;
use App\Models\Auth;

class MenuService
{
    
    public function query($request = null) 
    {
        // Optionally apply filters and pagination
        return Menu::with('children')->where('role_id', $request->role_id ?? 0)->where('parent_id', 0)->orderBy('sort', 'ASC')->get(); // Paginate results
    }

    public function createMenu(array $data, $roleId)
    {
        $user = Auth::user();

        $clear = Menu::forBusiness($user->business_id ?? 0)->where('role_id', $roleId)->delete();


        foreach ($data as $key => $value) {

            if ($value->text)
            {
                $newMenu = Menu::firstOrCreate([
                    'business_id' => $user->business_id ?? 0,
                    'name' => $value->text,
                    'route_name' => $value->route_name ?? $value->text,
                    'icon' => $value->icon ?? null,
                    'parent_id' => 0,
                    'role_id' => $roleId,
                    'sort' => $key
                ]);

                if ($value->children)
                {
                    foreach ($value->children as $subKey => $subValue) 
                    {
                        $newSubMenu = Menu::firstOrCreate([
                            'business_id' => $user->business_id ?? 0,
                            'name' => $subValue->text,
                            'route_name' => $subValue->route_name  ?? $subValue->text,
                            'icon' => $value->icon ?? null,
                            'parent_id' => $newMenu->id,
                            'role_id' => $roleId,
                            'sort' => $subKey
                        ]);
                    }
                }
            }

        }

        // Business logic for creating a Menu
        return true;
    }

    public function updateMenu($id, array $data)
    {
        // Business logic for updating a Menu
    }

    public function deleteMenu($id)
    {
        // Business logic for deleting a Menu
    }
}
