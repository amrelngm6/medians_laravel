@extends('layout.master')
@section('title', 'Forms ICheck')
@section('css')
    <link href="/assets/plugins/icheck/skins/all.css" rel="stylesheet" type="text/css" media="screen" />
@endsection
@section('main-content')

            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Form Elements - Checkbox & Radio</h1>
                            <!-- PAGE HEADING TAG - END -->
                        </div>

                        <div class="pull-right hidden-xs">
                            <ol class="breadcrumb">
                                <li>
                                    <a href="/"><i class="fa fa-home"></i>Home</a>
                                </li>
                                <li>
                                    <a href="">Ui Elements</a>
                                </li>
                                <li>
                                    <a href="">Form Elements</a>
                                </li>
                                <li class="active">
                                    <strong>Checkbox & Radio</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Checkboxes</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

                                    <!-- SKIN START -->

                                    <h3>Default Skin (Minimal)</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-1"
                                                                class="icheck-minimal-red" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-1">Checkbox
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-2"
                                                                class="icheck-minimal-green" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-2">Checkbox
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-3"
                                                                class="icheck-minimal-aero" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-3">Checkbox
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-4"
                                                                class="icheck-minimal-blue" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-4">Checkbox
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-5"
                                                                class="icheck-minimal-yellow" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-5">Checkbox
                                                                yellow</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-6"
                                                                class="icheck-minimal-grey" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-6">Checkbox
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-7"
                                                                class="icheck-minimal-orange" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-7">Checkbox
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-8"
                                                                class="icheck-minimal-pink" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-8">Checkbox
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="minimal-checkbox-9"
                                                                class="icheck-minimal-purple" checked>
                                                            <label class="icheck-label form-label" for="minimal-checkbox-9">Checkbox
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state icheckbox_minimal"></div>
                                                    Normal
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_minimal hover"></div>
                                                    Hover
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_minimal checked"></div>
                                                    Checked
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_minimal disabled"></div>
                                                    Disabled
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_minimal checked disabled"></div>
                                                    Disabled &amp; checked
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- SKIN START -->
                                    <br>
                                    <h3>Square Skin</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-1"
                                                                class="skin-square-red" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-1">Checkbox
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-2"
                                                                class="skin-square-green" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-2">Checkbox
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-3"
                                                                class="skin-square-aero" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-3">Checkbox
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-4"
                                                                class="skin-square-blue" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-4">Checkbox
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-5"
                                                                class="skin-square-yellow" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-5">Checkbox
                                                                yellow</label>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-6"
                                                                class="skin-square-grey" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-6">Checkbox
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-7"
                                                                class="skin-square-orange" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-7">Checkbox
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-8"
                                                                class="skin-square-pink" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-8">Checkbox
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="square-checkbox-9"
                                                                class="skin-square-purple" checked>
                                                            <label class="icheck-label form-label" for="square-checkbox-9">Checkbox
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state icheckbox_square-green"></div>
                                                    Normal
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_square-green hover"></div>
                                                    Hover
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_square-green checked"></div>
                                                    Checked
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_square-green disabled"></div>
                                                    Disabled
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_square-green checked disabled"></div>
                                                    Disabled &amp; checked
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- SKIN START -->
                                    <br>
                                    <h3>Flat Skin</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-1"
                                                                class="skin-flat-red" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-1">Checkbox
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-2"
                                                                class="skin-flat-green" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-2">Checkbox
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-3"
                                                                class="skin-flat-aero" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-3">Checkbox
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-4"
                                                                class="skin-flat-blue" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-4">Checkbox
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-5"
                                                                class="skin-flat-yellow" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-5">Checkbox
                                                                yellow</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-6"
                                                                class="skin-flat-grey" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-6">Checkbox
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-7"
                                                                class="skin-flat-orange" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-7">Checkbox
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-8"
                                                                class="skin-flat-pink" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-8">Checkbox
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="flat-checkbox-9"
                                                                class="skin-flat-purple" checked>
                                                            <label class="icheck-label form-label" for="flat-checkbox-9">Checkbox
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state icheckbox_flat-red"></div>
                                                    Normal
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_flat-red checked"></div>
                                                    Checked
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_flat-red disabled"></div>
                                                    Disabled
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_flat-red checked disabled"></div>
                                                    Disabled &amp; checked
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- SKIN START -->
                                    <br>
                                    <h3>Line Skin (Boxes)</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-1"
                                                                class="skin-line-red" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-1">Checkbox
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-2"
                                                                class="skin-line-green" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-2">Checkbox
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-3"
                                                                class="skin-line-aero" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-3">Checkbox
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-4"
                                                                class="skin-line-blue" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-4">Checkbox
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-5"
                                                                class="skin-line-yellow" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-5">Checkbox
                                                                yellow</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-6"
                                                                class="skin-line-grey" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-6">Checkbox
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-7"
                                                                class="skin-line-orange" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-7">Checkbox
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-8"
                                                                class="skin-line-pink" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-8">Checkbox
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="checkbox" id="line-checkbox-9"
                                                                class="skin-line-purple" checked>
                                                            <label class="icheck-label form-label" for="line-checkbox-9">Checkbox
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state icheckbox_line-blue">
                                                        <div class="icheck_line-icon"></div>
                                                        Normal
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_line-blue hover">
                                                        <div class="icheck_line-icon"></div>
                                                        Hover
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_line-blue checked">
                                                        <div class="icheck_line-icon"></div>
                                                        Checked
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_line-blue disabled">
                                                        <div class="icheck_line-icon"></div>
                                                        Disabled
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state icheckbox_line-blue checked disabled">
                                                        <div class="icheck_line-icon"></div>
                                                        Disabled &amp; checked
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="col-xs-12">
                    <section class="box ">
                        <header class="panel_header">
                            <h2 class="title pull-left">Radio Buttons</h2>
                        </header>
                        <div class="content-body">
                            <div class="row">
                                <div class="col-xs-12">

                                    <!-- SKIN START -->

                                    <h3>Default Skin (Minimal)</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-1"
                                                                class="icheck-minimal-red" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-1">Radio
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-2"
                                                                class="icheck-minimal-green" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-2">Radio
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-3"
                                                                class="icheck-minimal-aero" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-3">Radio
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-4"
                                                                class="icheck-minimal-blue" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-4">Radio
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-5"
                                                                class="icheck-minimal-yellow" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-5">Radio
                                                                yellow</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-6"
                                                                class="icheck-minimal-grey" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-6">Radio
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-7"
                                                                class="icheck-minimal-orange" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-7">Radio
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-8"
                                                                class="icheck-minimal-pink" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-8">Radio
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="minimal-radio-9"
                                                                class="icheck-minimal-purple" checked>
                                                            <label class="iradio-label form-label" for="minimal-radio-9">Radio
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state iradio_minimal"></div>
                                                    Normal
                                                </li>
                                                <li>
                                                    <div class="state iradio_minimal hover"></div>
                                                    Hover
                                                </li>
                                                <li>
                                                    <div class="state iradio_minimal checked"></div>
                                                    Checked
                                                </li>
                                                <li>
                                                    <div class="state iradio_minimal disabled"></div>
                                                    Disabled
                                                </li>
                                                <li>
                                                    <div class="state iradio_minimal checked disabled"></div>
                                                    Disabled &amp; checked
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- SKIN START -->
                                    <br>
                                    <h3>Square Skin</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-1"
                                                                class="skin-square-red" checked>
                                                            <label class="iradio-label form-label" for="square-radio-1">Radio
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-2"
                                                                class="skin-square-green" checked>
                                                            <label class="iradio-label form-label" for="square-radio-2">Radio
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-3"
                                                                class="skin-square-aero" checked>
                                                            <label class="iradio-label form-label" for="square-radio-3">Radio
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-4"
                                                                class="skin-square-blue" checked>
                                                            <label class="iradio-label form-label" for="square-radio-4">Radio
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-5"
                                                                class="skin-square-yellow" checked>
                                                            <label class="iradio-label form-label" for="square-radio-5">Radio
                                                                yellow</label>
                                                        </li>
                                                    </ul>

                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-6"
                                                                class="skin-square-grey" checked>
                                                            <label class="iradio-label form-label" for="square-radio-6">Radio
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-7"
                                                                class="skin-square-orange" checked>
                                                            <label class="iradio-label form-label" for="square-radio-7">Radio
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-8"
                                                                class="skin-square-pink" checked>
                                                            <label class="iradio-label form-label" for="square-radio-8">Radio
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="square-radio-9"
                                                                class="skin-square-purple" checked>
                                                            <label class="iradio-label form-label" for="square-radio-9">Radio
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state iradio_square-green"></div>
                                                    Normal
                                                </li>
                                                <li>
                                                    <div class="state iradio_square-green hover"></div>
                                                    Hover
                                                </li>
                                                <li>
                                                    <div class="state iradio_square-green checked"></div>
                                                    Checked
                                                </li>
                                                <li>
                                                    <div class="state iradio_square-green disabled"></div>
                                                    Disabled
                                                </li>
                                                <li>
                                                    <div class="state iradio_square-green checked disabled"></div>
                                                    Disabled &amp; checked
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- SKIN START -->
                                    <br>
                                    <h3>Flat Skin</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-1" class="skin-flat-red"
                                                                checked>
                                                            <label class="iradio-label form-label" for="flat-radio-1">Radio
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-2"
                                                                class="skin-flat-green" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-2">Radio
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-3"
                                                                class="skin-flat-aero" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-3">Radio
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-4"
                                                                class="skin-flat-blue" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-4">Radio
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-5"
                                                                class="skin-flat-yellow" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-5">Radio
                                                                yellow</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-6"
                                                                class="skin-flat-grey" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-6">Radio
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-7"
                                                                class="skin-flat-orange" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-7">Radio
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-8"
                                                                class="skin-flat-pink" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-8">Radio
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="flat-radio-9"
                                                                class="skin-flat-purple" checked>
                                                            <label class="iradio-label form-label" for="flat-radio-9">Radio
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state iradio_flat-red"></div>
                                                    Normal
                                                </li>
                                                <li>
                                                    <div class="state iradio_flat-red checked"></div>
                                                    Checked
                                                </li>
                                                <li>
                                                    <div class="state iradio_flat-red disabled"></div>
                                                    Disabled
                                                </li>
                                                <li>
                                                    <div class="state iradio_flat-red checked disabled"></div>
                                                    Disabled &amp; checked
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                    <!-- SKIN START -->
                                    <br>
                                    <h3>Line Skin (Boxes)</h3>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <h4>Colors</h4>
                                            <div class="row">
                                                <div class="col-md-6">

                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-1" class="skin-line-red"
                                                                checked>
                                                            <label class="iradio-label form-label" for="line-radio-1">Radio
                                                                red</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-2"
                                                                class="skin-line-green" checked>
                                                            <label class="iradio-label form-label" for="line-radio-2">Radio
                                                                green</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-3"
                                                                class="skin-line-aero" checked>
                                                            <label class="iradio-label form-label" for="line-radio-3">Radio
                                                                aero</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-4"
                                                                class="skin-line-blue" checked>
                                                            <label class="iradio-label form-label" for="line-radio-4">Radio
                                                                blue</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-5"
                                                                class="skin-line-yellow" checked>
                                                            <label class="iradio-label form-label" for="line-radio-5">Radio
                                                                yellow</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="col-md-6">
                                                    <ul class="list-unstyled">
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-6"
                                                                class="skin-line-grey" checked>
                                                            <label class="iradio-label form-label" for="line-radio-6">Radio
                                                                grey</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-7"
                                                                class="skin-line-orange" checked>
                                                            <label class="iradio-label form-label" for="line-radio-7">Radio
                                                                orange</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-8"
                                                                class="skin-line-pink" checked>
                                                            <label class="iradio-label form-label" for="line-radio-8">Radio
                                                                pink</label>
                                                        </li>
                                                        <li>
                                                            <input tabindex="5" type="radio" id="line-radio-9"
                                                                class="skin-line-purple" checked>
                                                            <label class="iradio-label form-label" for="line-radio-9">Radio
                                                                purple</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <h4>States</h4>
                                            <ul class="list-unstyled states">
                                                <li>
                                                    <div class="state iradio_line-blue">
                                                        <div class="icheck_line-icon"></div>
                                                        Normal
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state iradio_line-blue hover">
                                                        <div class="icheck_line-icon"></div>
                                                        Hover
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state iradio_line-blue checked">
                                                        <div class="icheck_line-icon"></div>
                                                        Checked
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state iradio_line-blue disabled">
                                                        <div class="icheck_line-icon"></div>
                                                        Disabled
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="state iradio_line-blue checked disabled">
                                                        <div class="icheck_line-icon"></div>
                                                        Disabled &amp; checked
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>

                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <script src="{{asset('assets/plugins/autosize/autosize.min.js')}}"></script>
    <script src="{{asset('assets/plugins/icheck/icheck.min.js')}}"></script>
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection