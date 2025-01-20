@extends('layout.master')
@section('title', 'Menu')
@section('css')
<link href="/assets/plugins/menu_builder/styles.min.css" rel="stylesheet" type="text/css" />
@endsection

@section('main-content')
<div class="wrapper main-wrapper row" style=''>

    <div class='col-xs-12'>
        <div class="page-title">

            <div class="pull-left">
                <!-- PAGE HEADING TAG - START -->
                <h1 class="title">Menu</h1>
                <!-- PAGE HEADING TAG - END -->
            </div>

        </div>
    </div>

    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->


    <div class="col-lg-12">

        <div class="card mb-5 mb-xl-10 py-0">
            <div class="card-body py-0 flex w-full">
                <!--begin::Navs-->
                <ul class="w-full nav nav-stretch nav-line-tabs nav-line-tabs-2x border-transparent fs-5 fw-bold">
                    @foreach ($roles as $role)
                    <!--begin::Nav item-->
                    <li class="nav-item mt-2">
                        <a class="nav-link text-active-primary ms-0 me-10 py-5" href="{{route('Menu')}}?role_id={{$role->id}}">
                            {{$role->name}} </a>
                    </li>
                    <!--end::Nav item-->
                    @endforeach
                </ul>
                <!--begin::Navs-->

            </div>
        </div>
    </div>


    <div class="clearfix"></div>
    <!-- MAIN CONTENT AREA STARTS -->

    <div class="col-lg-12">

        <div class="w-full card">
            <div class="card-body">
                <div class="w-full flex gap-10">
                    <div class="w-full">
                        <div class="card card-flush h-xl-100">
                            <!--begin::Header-->
                            <div class="card-header ">

                                <!--begin::Statistics-->
                                <div class="m-0">
                                    <!--begin::Heading-->
                                    <div class="d-flex align-items-center mb-2">
                                        <!--begin::Title-->
                                        <span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">Modules List</span>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Heading-->

                                    <!--begin::Description-->
                                    <span class="fs-6 fw-semibold text-gray-500">Available Modules to add Menu</span>
                                    <!--end::Description-->
                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::Header-->

                            <!--begin::Body-->
                            <div class="card-body card-body d-flex justify-content-between flex-column pt-3">
                            @php     
                            $menuNames = $Menu->pluck('route_name')->toArray()
                            @endphp
                                @foreach ($modules as $module)
                                @if (!in_array($module->route_name, $menuNames))
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-2" id="module-{{$module->id}}"
                                    onClick="(function(){ jQuery('#module-{{$module->id}}').remove(); return addMenuItem({{ json_encode($module)}}); })();">
                                    <!--begin::Flag-->
                                    <i class="bx bx-menu fs-2hx me-4 text-sinata"></i>
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div
                                        class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#"
                                                class="text-gray-800 fw-bold text-hover-primary fs-6">{{$module->name}}</a>
                                            <!--end::Title-->
                                        </div>
                                        <!--end::Content-->

                                        <!--begin::Wrapper-->
                                        <div class="d-flex align-items-center">
                                            <!--begin::Info-->
                                            <div class="m-0">
                                                <!--begin::Label-->
                                                <span class="badge round-success items-center pt-1 fs-base">
                                                    Add
                                                    <i class="bx bxs-right-arrow-alt"></i>
                                                </span>
                                                <!--end::Label-->

                                            </div>
                                            <!--end::Info-->
                                        </div>
                                        <!--end::Wrapper-->
                                    </div>
                                    <!--end::Section-->
                                </div>
                                <!--end::Item-->
                                @endif
                                @endforeach
                            </div>
                            <!--end::Body-->
                        </div>

                    </div>

                    <div class="w-full" id="menu-builder">
                        <div class="w-full">

                            <!--begin::Header-->
                            <div class="card-header px-0">

                                <!--begin::Statistics-->
                                <div class="m-0 flex gap-4 w-full  my-6">

                                    <!--begin::Description-->
                                    <span class="w-full fs-6 fw-semibold text-gray-500 pt-3">List of current Menu
                                        items</span>
                                    <!--end::Description-->
                                    <!--begin::Heading-->
                                    <div class="flex-none  align-items-center">
                                        <!--begin::Title-->
                                        <form action="{{route('Menu.store')}}" class="ajax-form" id="meun-form">
                                            @csrf
                                            <input type="hidden" name="menu_items" id="menu-json" value="" />
                                            <input type="hidden" name="role_id" value="{{app()->request->role_id ?? $roles[0]->id}}" />
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </form>
                                        <!--end::Title-->

                                    </div>
                                    <!--end::Heading-->

                                </div>
                                <!--end::Statistics-->
                            </div>
                            <!--end::Header-->
                            <div class="pt-6" id="menu-builder"></div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    <!-- MAIN CONTENT AREA ENDS -->
</div>
<div class="modal fade  active " id="edit-Business-modal" tabindex="-1" aria-hidden="true">
    <!--begin::Modal dialog-->
    <div class="modal-dialog modal-dialog-centered mw-650px">
        <!--begin::Modal content-->
        <div class="modal-content rounded">
            <!--begin::Modal header-->
            <div class="modal-header pb-0 border-0 justify-content-end">
                <!--begin::Close-->
                <div class="cursor-pointer text-danger close-modal" data-modal="#edit-Business-modal">
                    <i class='bx bx-message-square-x fs-2qx'></i>
                </div>
                <!--end::Close-->
            </div>
            <!--begin::Modal header-->

            <!--begin::Modal body-->
            <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                <!--begin:Form-->
                    <!--begin::Heading-->
                    <div class="mb-13 text-center">
                        <!--begin::Title-->
                        <h1 class="mb-3">Edit Menu item</h1>
                        <!--end::Title-->

                        <!--begin::Description-->
                        <div class="text-muted fw-semibold fs-5">
                            Edit Route <span class="fw-semibold text-danger" id="active-menu-name"></span> Title at the Menu .
                        </div>
                        <!--end::Description-->
                    </div>
                    <!--end::Heading-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Title</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" id="active-menu-val" placeholder="Menu title" value="" name="name" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Route Name</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" id="active-menu-route" placeholder="Route name" value="" name="route_name" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="d-flex flex-column mb-8 fv-row">
                        <!--begin::Label-->
                        <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                            <span class="required">Icon</span>
                        </label>
                        <!--end::Label-->
                        <input class="form-control form-control-solid" id="active-menu-icon" placeholder="Menu icon class" value="" name="icon" />
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="text-center">
                        <button id="updateMenuItem" class="btn btn-primary">
                            <span class="indicator-label">
                                Submit
                            </span>
                        </button>
                    </div>
                    <!--end::Actions-->
            </div>
            <!--end::Modal body-->
        </div>
        <!--end::Modal content-->
    </div>
    <!--end::Modal dialog-->
</div>
@endsection 



@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
<script src="{{asset('assets/plugins/menu_builder/menu-editor.min.js')}}"></script>
<script>
var menuEditor = new MenuEditor('menu-builder', {
    maxLevel: 3
});
var nestedData = {!! json_encode($Menu) !!};
var activeMenuItem = null;

menuEditor.onClickDelete((event) => {
    if (confirm('Do you want to delete the item ' + event.item.getDataset().text)) {
        event.item.remove(); // remove the item
        jQuery('#menu-json').val(menuEditor.getString())
    }
});

menuEditor.onClickEdit((event) => {
    activeMenuItem = event.item
    jQuery('#active-menu-name').text(event.item.getDataset().route_name)
    jQuery('#active-menu-route').val(event.item.getDataset().route_name)
    jQuery('#active-menu-val').val(event.item.getDataset().text)
    jQuery('#active-menu-icon').val(event.item.getDataset().icon)
    jQuery('#edit-Business-modal').addClass('show')
    menuEditor.edit(activeMenuItem)
});

jQuery('#updateMenuItem').on('click', function() {
    let route_name = jQuery('#active-menu-route').val()
    let name = jQuery('#active-menu-val').val()
    let icon = jQuery('#active-menu-icon').val()

    // Update the text
    if (activeMenuItem) {
        activeMenuItem.name = name
        activeMenuItem.route_name = route_name
        activeMenuItem.icon = icon
        menuEditor.update(menuItem(activeMenuItem)); // Update the menu editor with the new structure
    }
    menuEditor.update(activeMenuItem)
    jQuery('#menu-json').val(menuEditor.getString())
    jQuery('#edit-Business-modal').removeClass('show')
    
})

try {

    let lst = [];
    nestedData.forEach(element => {
        let model = {
            name: element.name,
            route_name: element.route_name,
            children: element.children ?? []
        }
        lst.push(menuItem(model));
    });

    menuEditor.setArray(nestedData);

} catch (error) {
    console.log(error)
}

// menuEditor.setArray(lst);
menuEditor.mount();

function menuItem(model) {
    return {
        text: model.name, // required
        href: model.route_name ?? model.name, // required
        route_name: model.route_name ?? model.name, // required
        icon:  (model.icon ?? 'lock'), // required
        tooltip: model.name, // required
        children: model.children ?? []
    };
}

function addMenuItem(model) {
    menuEditor.add(menuItem(model));
    jQuery('#menu-json').val(menuEditor.getString())
}



// Listen for sorting changes
jQuery(document).ready(function() {
    handleDragEvent()
    jQuery('#menu-json').val(menuEditor.getString())
});

function handleDragEvent() {
    const currentList = document.getElementsByClassName("list-group-item");
    for (let i = 0; i < currentList.length; i++) {
        const element = currentList[i];
        element.addEventListener("dragend", (event) => {
            jQuery('#menu-json').val(menuEditor.getString())
        });
    }
}
</script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection