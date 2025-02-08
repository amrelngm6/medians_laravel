<?php

namespace App\Modules\Menu\Controllers;

use App\Http\Controllers\Controller;

use App\Modules\Menu\Services\MenuService;
use App\Modules\Core\Services\RoleService;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Routing\Controllers\HasMiddleware;
use App\Models\Auth;
use App\Models\Module;

class MenuController extends Controller
{
    

    protected $menuService;

    protected $roleService;


    public function __construct(MenuService $menuService, RoleService $roleService)
    {
        $this->menuService = $menuService;

        $this->roleService = $roleService;
    }


    public function index(Request $request)
    {
        
        $Menu = $this->menuService->query($request->merge(['role_id'=>Auth::user()->role_id]));
        
        switch (Auth::guardName()) {
            case 'superadmin':
                $roles = $this->roleService->superadmins();
                break;
            
            default:
                $roles = $this->roleService->query($request->merge(['guard' => Auth::guardName()]));
                break;
        }
        
        $modules = Module::getActive();
        
        return view('menu::list', compact('Menu','roles','modules'));
    }

    public function store(Request $request)
    {

        $menu = $this->menuService->createMenu(json_decode($request->menu_items), $request->role_id);

        return $menu ? response()->json([
            'success' => true,
            'title' => 'Done',
            'reload' => true,
            'result' => 'Menu updated successfully',
        ], 200) : null;

    }

}
