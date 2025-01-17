@extends('layout.master')
@section('title', 'Menu')
@section('css')
<link href="/assets/plugins/menu_builder/styles.min.css" rel="stylesheet" type="text/css" />
@endsection

<?php $modules = App\Models\Module::getActive(); ?>
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

        <div class="w-full card" >
            <div class="card-body" >
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
                                @foreach ($modules as $module)
                                <!--begin::Item-->
                                <div class="d-flex flex-stack py-2" id="module-{{$module->id}}" onClick="(function(){ jQuery('#module-{{$module->id}}').remove(); return addMenuItem({{ json_encode($module)}}); })();" >
                                    <!--begin::Flag-->
                                    <i class="bx bx-menu fs-2hx me-4 text-sinata"></i>
                                    <!--end::Flag-->

                                    <!--begin::Section-->
                                    <div class="d-flex align-items-center flex-stack flex-wrap flex-row-fluid d-grid gap-2">
                                        <!--begin::Content-->
                                        <div class="me-5">
                                            <!--begin::Title-->
                                            <a href="#" class="text-gray-800 fw-bold text-hover-primary fs-6">{{$module->name}}</a>
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
                                @endforeach
                            </div>
                            <!--end::Body-->
                        </div>
                        
                    </div>
                    
                    <div class="w-full" id="menu-builder">
                        <div class="w-full" >

                            <!--begin::Header-->
                            <div class="card-header px-0">

                                <!--begin::Statistics-->
                                <div class="m-0 flex gap-4 w-full  my-6">
                                    
                                    <!--begin::Description-->
                                    <span class="w-full fs-6 fw-semibold text-gray-500 pt-3">List of current Menu items</span>
                                    <!--end::Description-->
                                    <!--begin::Heading-->
                                    <div class="flex-none  align-items-center">
                                        <!--begin::Title-->
                                        <form action="{{route('Menu.store')}}" class="ajax-form" id="meun-form">
                                            @csrf
                                            <input type="hidden" name="menu_items" id="menu-json" value="" />
                                            <button type="submit" class="btn btn-primary" >Save</button>
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

menuEditor.onClickDelete((event) => {
	if (confirm('Do you want to delete the item ' + event.item.getDataset().text)) {
		event.item.remove(); // remove the item
        jQuery('#menu-json').val(menuEditor.getString())
	}
});

try {
    
    let lst = [];
    nestedData.forEach(element => {
        let model = {name: element.name, route_name: element.route_name, children: element.children ?? []}
        lst.push(menuItem(model));
    });

    menuEditor.setArray(nestedData);
    
} catch (error) {
    console.log(error)
}

// menuEditor.setArray(lst);
menuEditor.mount();

function menuItem(model)
{
    return {
        text: model.name, // required
        href: model.route_name, // required
        icon: 'lock', // required
        tooltip: model.name, // required
        children: model.children ?? []
    };
}

function addMenuItem(model)
{
    menuEditor.add(menuItem(model));
    jQuery('#menu-json').val(menuEditor.getString())
}



// Listen for sorting changes
jQuery(document).ready(function () {
    handleDragEvent()
    jQuery('#menu-json').val(menuEditor.getString())
});

function handleDragEvent()
{
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