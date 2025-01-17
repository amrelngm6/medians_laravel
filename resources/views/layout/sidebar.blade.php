<?php $user = App\Models\Auth::user(); ?>

@if ($user && ($user->business || App\Models\Auth::guardName() == 'superadmin'))

<div class="page-sidebar fixedscroll">

    <!-- MAIN MENU - START -->
    <div class="page-sidebar-wrapper" id="main-menu-wrapper">

        <ul class='wraplist pb-20'>
            <li class='menusection'>Main</li>
            <li class="">
                <a href="{{route('dashboard')}}">
                    <i class="img">
                        <img src="/data/icons/dashboard.svg" alt="" class="width-20">
                    </i>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            
            <?php $menuList = class_exists('App\Modules\Menu\Services\MenuService') ?  (new App\Modules\Menu\Services\MenuService)->query((object) ['role_id'=>$user->role_id ?? 0]) : []; ?>
            @foreach ($menuList as $menuItem)
            <li class="">
                @if (Route::has($menuItem->route_name) )
                <a href="{{count($menuItem->children) ? 'javascript:;' : route($menuItem->route_name) }}">
                    <i class="fs-2 img bx {{$menuItem->icon ?? 'lock'}}"> </i>
                    <span class="title">{{$menuItem->name}}</span>
                    @if (count($menuItem->children)) <span class="arrow "></span> @endif
                </a>
                @endif
                @if (count($menuItem->children))
                <ul class="sub-menu">
                    @if (Route::has($menuItem->route_name))
                    <li>
                        <a href="{{route($menuItem->route_name)}}" class="">{{$menuItem->name}}</a>
                    </li>
                    @endif 
                    @foreach ($menuItem->children as $subMenuItem)
                    @if (Route::has($subMenuItem->route_name))
                    <li>
                        <a href="{{route($subMenuItem->route_name)}}" class="">{{$subMenuItem->name}}</a>
                    </li>
                    @endif 
                    @endforeach 
                </ul>
                @endif
            </li>
            @endforeach 
            
            @if (class_exists('App\Modules\Menu\Services\MenuService'))
            <li class="">
                <a href="{{ route('Menu')}}?role_id={{$user->role_id}}">
                    <i class="img">
                        <img src="/data/icons/lock.svg" alt="" class="width-20">
                    </i>
                    <span class="title">Menus</span>
                </a>
            </li>
            @endif

            @if (!empty(Auth::user()->role->id) && Auth::user()->role->id == 1)
            <li class="">
                <a href="{{route('Modules')}}">
                    <i class="img">
                        <img src="/data/icons/lock.svg" alt="" class="width-20">
                    </i>
                    <span class="title">Modules</span>
                </a>
            </li>
            
            <li class="">
                <a href="{{route('Users')}}">
                    <i class="img">
                        <img src="/data/icons/lock.svg" alt="" class="width-20">
                    </i>
                    <span class="title">Users</span>
                </a>
            </li>
            @endif


        </ul>

    </div>
    <!-- MAIN MENU - END -->

</div>
@endif