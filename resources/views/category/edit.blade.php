@extends('layout.master')
@section('title', 'Edit Product')
@section('css')
<link href="/assets/plugins/select2/select2.css" rel="stylesheet" type="text/css" />
@endsection
@section('main-content')
            
            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Edit Product ( Mesh Ergonomic Black Chair ) </h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>
                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="#">E-Commerce</a>
                                </li>
                                <li class="active">
                                    <strong>Products list</strong>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>

                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <form>

                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-12">
                        <div>
                            <div class="card">
                                <div class="card-body pb-0">
                                    <div class="lg:flex gap-10  relative" id="upload-media-form">
                                        <label
                                            class="flex cursor-pointer py-4 px-2   bg-gray-200  w-full border-danger">
                                            <img id="imagePreview" src="/data/products/3.png"
                                                class="dark:opacity-30">
                                            <input id="imageInput" type="file" name="file" class="hidden">
                                        </label>
                                        <div class="w-full">
                                            <label for="imageInput"
                                                class="rounded-4 inline-block px-6  rounded-2xl border dark:text-gray-300 border-gray-100 transition hover:border-rose-600">
                                                <p class="block mt-4 text-gray-400">Click to upload your file</p>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-title py-4 flex">
                                    <h2 class="w-full">Status</h2>
                                    <div class="rounded-circle bg-success mt-2 p-0 w-10px h-10px"></div>
                                </div>
                                <div class="card-body px-0 pt-0">
                                    <div class="w-full"><select required="" name="params[status]"
                                            class="form-control py-2 form-control-solid" placeholder="Status"><!---->
                                            <option value="0" >Pending</option>
                                            <option value="on" selected>Active</option>
                                        </select><!----></div>
                                    <div class="text-muted fs-7 pt-2">Set the item status</div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-title py-4 flex">
                                    <h2 class="w-full">Category</h2>
                                </div>
                                <div class="card-body px-0 pt-0">
                                    <div class="w-full"><select required="" name="category"
                                            class="form-control py-2 form-control-solid" placeholder="Category"><!---->
                                            <option value="Fashion" selected>Fashion</option>
                                            <option value="Accessories">Accessories</option>
                                            <option value="Electronics">Electronics</option>
                                        </select><!----></div>
                                    <div class="text-muted fs-7 pt-2">Set the item status</div>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-title py-4 flex">
                                    <h2 class="w-full">Page Layout</h2>
                                </div>
                                <div class="card-body px-0 pt-0">
                                    <div class="w-full"><select required="" name="params[status]"
                                            class="form-control py-2 form-control-solid" placeholder="Status"><!---->
                                            <option value="default" selected>Default</option>
                                            <option value="modern">Modern</option>
                                        </select><!----></div>
                                    <div class="text-muted fs-7 pt-2">Choose from layouts to display the product page
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8 col-md-7 col-sm-12">
                        <div>
                            <ul class="nav bg-white nav-custom border-0 fs-4 fw-semibold mb-n2 pt-3">
                                <li class="nav-item pb-0"><a data-tab="#general-tab" data-container="#tab-container"
                                        class="tab-li text-active-primary pb-4 active" href="javascript:;">General</a>
                                </li>
                                <li class="nav-item pb-0"><a data-tab="#pricing-tab" data-container="#tab-container"
                                        class="tab-li  pb-4" href="javascript:;">Pricing</a></li>
                                <li class="nav-item pb-0"><a data-tab="#attributes-tab" data-container="#tab-container"
                                        class="tab-li  pb-4" href="javascript:;">Attributes</a></li>
                                <li class="nav-item pb-0"><a data-tab="#advanced-tab" data-container="#tab-container"
                                        class="tab-li  pb-4" href="javascript:;">Advanced</a></li>
                                <li class="nav-item pb-0"><a data-tab="#images-tab" data-container="#tab-container"
                                        class="tab-li  pb-4" href="javascript:;">Images</a></li>
                                <li class="nav-item pb-0"><a data-tab="#seo-tab" data-container="#tab-container"
                                        class="tab-li  pb-4" href="javascript:;">SEO</a></li>
                            </ul>
                        </div>

                        <div class="tab-content px-0" id="tab-container">
                            <div id="general-tab" class="tab-element fade show active opacity-100">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header flex flex-nowrap">
                                            <div class="card-title w-full block">
                                                <h2> General</h2>
                                                <div class="form-text">You can customize Product Link.</div>
                                            </div>
                                            <ul class="flex gap-10 flex-none">
                                                <li class="text-lg flex py-5 gap-2 cursor-pointer">
                                                    <img src="/data/flags/united-states.svg"
                                                        class="rounded-circle w-30px h-30px border-1 border border-gray-600 p-1" />
                                                    <a href="javascript:;" class="pt-1 opacity-75 text-danger fw-bold">
                                                        English</a>
                                                </li>
                                                <li class="text-lg flex py-5 gap-2 cursor-pointer">
                                                    <img src="/data/flags/ar.svg"
                                                        class="rounded-circle w-30px h-30px border-1 border border-gray-600 p-1" />
                                                    <a href="javascript:;" class="pt-1 opacity-75 text-gray-400">
                                                        Arabic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="w-full">
                                            <div>
                                                <div class="card-body pt-0">
                                                    <div class="mb-10 fv-row">
                                                        <label class="required form-label fw-bold "><span
                                                                class="fw-bold">Path</span><span
                                                                class="px-4 text-muted">English</span></label>
                                                        <div class="position-relative flex">
                                                            <i
                                                                class="fs-3 position-absolute top-0 m-4  bx bx-link-alt"></i>
                                                            <input disabled="" value="https://example.com/"
                                                                class="bg-gray-200 form-control form-control-solid w-auto ps-12  px-4" />
                                                            <input type="text" value="mesh-ergonomic-black-chair"
                                                                class="w-full form-control form-control-solid" />
                                                        </div>
                                                        <div class="text-muted fs-7">URL path for the item webpage
                                                        </div>
                                                    </div>
                                                    <div class="mb-10 fv-row">
                                                        <label class="required form-label fw-bold "><span
                                                                class="fw-bold">Name</span><span
                                                                class="px-4 text-muted">English</span></label>
                                                        <input type="text" value="Mesh Ergonomic Black Chair"
                                                            class="form-control form-control-solid mb-2" />
                                                        <div class="text-muted fs-7">
                                                            Name is required and recommended to be unique
                                                        </div>
                                                    </div>
                                                    <div class="mb-10 fv-row">
                                                        <label class="form-label fw-bold gap-6 flex"><span
                                                                class="fw-bold">Short
                                                                Description</span><span class="px-4 text-muted"
                                                                v-text="">English</span> </label>
                                                        <textarea rows="3" class="form-control-solid form-control">Make sure the product description provides a detailed explanation of your product so that it is easy to understand and find your product.
                                                        </textarea>
                                                        <div class="text-muted fs-7"> Set a description to the item for
                                                            better visibility
                                                        </div>
                                                    </div>
                                                    <div class="mb-10 fv-row">
                                                        <label class="form-label fw-bold gap-6 flex"><span
                                                                class="fw-bold">Page
                                                                Content</span><span class="px-4 text-muted"
                                                                v-text="">English</span> </label>
                                                        <div class="form-control form-control-solid editor">
                                                            <p>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt </p>
                                                            <p>You probably haven't heard of them accusamus labore VHS Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table,</p>
                                                        </div>
                                                        <div class="text-muted fs-7">
                                                            Set a description to the item for better visibility
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="pricing-tab" class="tab-element fade show active hidden">
                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title block mb-10">
                                            <h2>Pricing</h2>
                                            <div class="form-text">Prices & vat at item.</div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="w-full" callback="o=>{t.activeItem.value.price=o}"><!---->
                                            <div class="mb-10 fv-row"><label
                                                    class="required form-label fw-bold">Price</label><input
                                                    type="number" name="price" value="19.99"
                                                    class="form-control form-control-solid mb-2">
                                                <div class="text-muted fs-7">Set the product price</div>
                                            </div><!----><!---->
                                        </div>
                                        <div class="w-full" callback="o=>{t.activeItem.value.old_price=o}"><!---->
                                            <div class="mb-10 fv-row"><label class="required form-label fw-bold">Old
                                                    price</label><input type="number" value="30.00" name="old_price"
                                                    class="form-control form-control-solid mb-2">
                                                <div class="text-muted fs-7">Set the product old price</div>
                                            </div><!----><!---->
                                        </div>
                                        <div class="row mb-10">
                                            <div class="col-md-8 fv-row"><label
                                                    class="required fs-6 fw-semibold form-label fw-bold mb-2">Tax</label>
                                                <div class="w-full">
                                                    <div class="w-full">
                                                        <!----><!----><!----><!----><!----><!----><!----><select
                                                            required="" name="tax_type"
                                                            class="form-control form-control-solid py-3 h-auto"
                                                            placeholder="Tax"><!---->
                                                            <option value="" selected>Free tax</option>
                                                            <option value="percent" >Tax percentage</option>
                                                            <option value="fixed">Tax amount</option>
                                                        </select><!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 fv-row"><label
                                                    class="d-flex align-items-center fs-6 fw-semibold form-label fw-bold mb-2"><span
                                                        class="required">Amount</span></label>
                                                <div class="position-relative"><input disabled="" type="number"
                                                        class="form-control form-control-solid">
                                                    <div
                                                        class="position-absolute translate-middle-y top-50 text-muted end-0 me-3">
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-10">
                                            <div class="col-md-8 fv-row"><label
                                                    class="required fs-6 fw-semibold form-label fw-bold mb-2">Vat</label>
                                                <div class="w-full">
                                                    <div class="w-full">
                                                        <!----><!----><!----><!----><!----><!----><!----><select
                                                            required="" name="vat_type"
                                                            class="form-control form-control-solid py-3 h-auto"
                                                            placeholder="Vat"><!---->
                                                            <option value="">Free Vat</option>
                                                            <option value="percent" selected>Vat percentage</option>
                                                            <option value="fixed">Vat amount</option>
                                                        </select><!---->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 fv-row"><label
                                                    class="d-flex align-items-center fs-6 fw-semibold form-label fw-bold mb-2"><span
                                                        class="required">Amount</span></label>
                                                <div class="position-relative"><input value="14" type="number"
                                                        class="form-control form-control-solid">
                                                    <div
                                                        class="position-absolute translate-middle-y top-50 text-muted end-0 me-3">
                                                        <!----><!---->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div id="attributes-tab" class="tab-element fade show active hidden">
                                <div class="d-flex flex-column gap-7 gap-lg-10">

                                    <div class="card card-flush py-4">
                                        <div class="card-header mb-10">
                                            <div class="card-title block">
                                                <h2>Variations</h2>
                                                <div class="form-text">You can customize Product Link.</div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="w-full">
                                                <label class="form-label fw-bold">Add Product Variations</label>
                                                <div>
                                                    <div class="form-group" id="variants-container">
                                                        <div class="d-flex flex-column gap-3" id="variants">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="title" value="Variant 1 " />
                                                                </div>
                                                                <input type="text" class="form-control mw-100 w-200px"
                                                                    placeholder="Variation" value="Value 1" />

                                                                <button data-element="#variants" type="button"
                                                                    class="remove-item btn btn-sm btn-icon bg-gray-100 flex gap-4">
                                                                    <i class="bx bx-message-square-x"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <div class="d-flex flex-column gap-3" id="variants">
                                                            <div
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input type="text"
                                                                        class="form-control mw-100 w-200px"
                                                                        placeholder="title"/>
                                                                </div>
                                                                <input type="text" class="form-control mw-100 w-200px"
                                                                    placeholder="Variation"  />

                                                                <button data-element="#variants" type="button"
                                                                    class="remove-item btn btn-sm btn-icon bg-gray-100 flex gap-4">
                                                                    <i class="bx bx-message-square-x"></i>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group mt-5">
                                                        <button 
                                                            class="btn btn-sm btn-light-primary append-html" 
                                                            data-element="#variants"
                                                            data-container="#variants-container" type="button"
                                                            data-html='<div class="d-flex flex-column gap-3" id="variants">
                                                            <div 
                                                                class="form-group d-flex flex-wrap align-items-center gap-5">
                                                                <div class="w-100 w-md-200px">
                                                                    <input 
                                                                        type="text" class="form-control mw-100 w-200px"
                                                                        placeholder="title" />
                                                                </div>
                                                                <input 
                                                                    type="text" class="form-control mw-100 w-200px"
                                                                    placeholder="Variation" />
    
                                                                <button data-element="#variants"
                                                                    type="button"
                                                                    class="remove-item btn btn-sm btn-icon bg-gray-100 flex gap-4">
                                                                    <i class="bx bx-message-square-x"></i>
                                                                </button>
                                                            </div>
                                                        </div>'>
                                                            <i class='bx bx-add-to-queue'></i>
                                                            <span>Add new</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="images-tab" class="tab-element fade show active hidden">

                                <div class="card card-flush py-4">
                                    <div class="card-header">
                                        <div class="card-title block">
                                            <h2>Product information</h2>
                                            <!--begin::Hint-->
                                            <div class="form-text">Allowed file types: png, jpg, jpeg.</div>
                                            <!--end::Hint-->
                                        </div>
                                    </div>
                                    <div class="card-body " id="images">
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline col-md-3"
                                            style="background-image: url('/data/profile/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(/data/products/2.png)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-edit-alt'></i>
                                                <input type="file" class="hidden" name="avatar"
                                                    accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span data-element="#"
                                                class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-message-square-x'></i></span>
                                        </div>
                                        <!--end::Image input-->
                                        
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline col-md-3"
                                            style="background-image: url('/data/profile/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(/data/products/1.png)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-edit-alt'></i>
                                                <input type="file" class="hidden" name="avatar"
                                                    accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span data-element="#"
                                                class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-message-square-x'></i></span>
                                        </div>
                                        <!--end::Image input-->
                                        
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline col-md-3"
                                            style="background-image: url('/data/profile/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(/data/products/3.png)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-edit-alt'></i>
                                                <input type="file" class="hidden" name="avatar"
                                                    accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span data-element="#"
                                                class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-message-square-x'></i></span>
                                        </div>
                                        <!--end::Image input-->

                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline col-md-3"
                                            style="background-image: url('/data/profile/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(/data/products/2.png)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-edit-alt'></i>
                                                <input type="file" class="hidden" name="avatar"
                                                    accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span data-element="#"
                                                class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-message-square-x'></i></span>
                                        </div>
                                        <!--end::Image input-->
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline col-md-3"
                                            style="background-image: url('/data/profile/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(/data/products/4.png)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-edit-alt'></i>
                                                <input type="file" class="hidden" name="avatar"
                                                    accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span data-element="#"
                                                class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-message-square-x'></i></span>
                                        </div>
                                        <!--end::Image input-->
                                        
                                        <!--begin::Image input-->
                                        <div class="image-input image-input-outline col-md-3"
                                            style="background-image: url('/data/profile/blank.svg')">
                                            <div class="image-input-wrapper w-125px h-125px"
                                                style="background-image: url(/data/products/5.png)">
                                            </div>
                                            <label
                                                class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-edit-alt'></i>
                                                <input type="file" class="hidden" name="avatar"
                                                    accept=".png, .jpg, .jpeg">
                                                <input type="hidden" name="avatar_remove">
                                            </label>
                                            <span data-element="#"
                                                class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1">
                                                <i class='bx bx-message-square-x'></i></span>
                                        </div>
                                        <!--end::Image input-->
                                    </div>
                                    <button data-container="#images" type="button"
                                        class="btn btn-primary append-html"
                                        data-html='<div class="image-input image-input-outline col-md-3" data-kt-image-input="true" > <div style="background-image: url(/data/icons/picture.svg)" class="image-input-wrapper w-125px h-125px" > </div> <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1"> <i class="bx bx-edit-alt"></i> <input type="file" class="hidden" name="avatar" accept=".png, .jpg, .jpeg"> <input type="hidden" name="avatar_remove"> </label> <span class="remove-parent btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow p-1"> <i class="bx bx-message-square-x"></i></span> </div>'>
                                        <i class="bx bx-add-to-queue"></i>
                                        <span>Add new</span>
                                    </button>
                                </div>
                            </div>

                            <div id="seo-tab" class="tab-element fade show active hidden">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header flex flex-nowrap">
                                            <div class="w-full card-title block mb-10">
                                                <h2>SEO & Meta Options</h2>
                                                <div class="form-text">Set your Meta tags for the product.</div>
                                            </div>
                                            <ul class="flex gap-10 flex-none">
                                                <li class="text-lg flex py-5 gap-2 cursor-pointer"><img
                                                        src="/data/flags/en.svg"
                                                        class="rounded-circle w-30px h-30px border-1 border border-gray-600 p-1"><a
                                                        href="javascript:;"
                                                        class="pt-1 text-danger font-bold">English</a>
                                                </li>
                                                <li class="text-lg flex py-5 gap-2 cursor-pointer"><img
                                                        src="/data/flags/ar.svg"
                                                        class="rounded-circle w-30px h-30px border-1 border border-gray-600 p-1"><a
                                                        href="javascript:;"
                                                        class="pt-1 opacity-75 text-gray-400">Arabic</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="mb-10"><label class="form-label">Meta Tag Title
                                                    (english)</label><input type="text"
                                                    class="form-control form-control-solid mb-2" name="meta_title"
                                                    placeholder="Meta tag name">
                                                <div class="text-muted fs-7">Set a meta tag title. Recommended to be
                                                    simple and precise keywords (English)</div>
                                            </div>
                                            <div class="mb-10"><label class="form-label">Meta Tag
                                                    Description</label><textarea
                                                    class="form-control form-control-solid"></textarea>
                                                <div class="text-muted fs-7">Set a meta tag description to the item
                                                    for increased SEO ranking</div>
                                            </div>
                                            <div><label class="form-label">Meta Tag Keywords</label><input
                                                    id="ecommerce_add_item_meta_keywords"
                                                    class="form-control form-control-solid">
                                                <div class="text-muted fs-7">Set a list of keywords that the item is
                                                    related to. Separate the keywords by adding a comma
                                                    &lt;code&gt;,&lt;/code&gt; between each keyword</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="advanced-tab" class="tab-element fade show active hidden">
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="card card-flush py-4">
                                        <div class="card-header mb-10">
                                            <div class="card-title block">
                                                <h2>Product information</h2>
                                                <div class="form-text">You can customize Product Link.</div>
                                            </div>
                                        </div>
                                        <div class="card-body pt-0">
                                            <div class="w-full" callback="o=>{t.activeItem.value.product_fields.sku=o}">
                                                <!---->
                                                <div class="mb-10 fv-row"><label
                                                        class="required form-label fw-bold">SKU</label><input
                                                        type="text" name="sku" value="P-232100071"
                                                        class="form-control mb-2 form-control-solid">
                                                    <div class="text-muted fs-7"></div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="w-full"
                                                callback="o=>{t.activeItem.value.product_fields.barcode=o}">
                                                <!---->
                                                <div class="mb-10 fv-row"><label
                                                        class="required form-label fw-bold">Barcode</label><input
                                                        type="text" name="barcode" value="14569"
                                                        class="form-control mb-2 form-control-solid">
                                                    <div class="text-muted fs-7">Enter the product barcode number</div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="w-full"
                                                callback="o=>{t.activeItem.value.product_fields.unit=o}">
                                                <!---->
                                                <div class="mb-10 fv-row"><label
                                                        class="required form-label fw-bold">Unit</label><input
                                                        type="text" name="unit" value="Piece"
                                                        class="form-control mb-2 form-control-solid">
                                                    <div class="text-muted fs-7">Unit of the product to sale</div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="w-full"
                                                callback="o=>{t.activeItem.value.product_fields.weight=o}">
                                                <!---->
                                                <div class="mb-10 fv-row"><label
                                                        class="required form-label fw-bold">Weight</label><input
                                                        type="text" name="weight" value="700G"
                                                        class="form-control mb-2 form-control-solid form-control -solid">
                                                    <div class="text-muted fs-7">Enter the product weight</div>
                                                </div><!----><!---->
                                            </div>
                                            <div class="w-full"
                                                callback="o=>{t.activeItem.value.product_fields.min_purchase_qty=o}">
                                                <!---->
                                                <div class="mb-10 fv-row"><label
                                                        class="required form-label fw-bold">Minimum
                                                        purchase qty</label><input type="number"
                                                        name="min_purchase_qty" value="1"
                                                        class="form-control mb-2 form-control-solid">
                                                    <div class="text-muted fs-7">Minimum quantity to make order</div>
                                                </div><!----><!---->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="py-10 flex justify-content-end">
                            <!--begin::Button-->
                            <a href="{{route(App::getLocale() . '.ecommerce_list')}}" class="btn btn-light me-5">
                                Cancel
                            </a>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">
                                    Save Changes
                                </span>
                            </button>
                            <!--end::Button-->
                        </div>
                    </div>
                </form>

                <div class="clearfix"></div>


                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
<script src="{{asset('assets/plugins/select2/select2.min.js')}}"></script>
<script src="{{asset('assets/plugins/ckeditor/ckeditor.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection