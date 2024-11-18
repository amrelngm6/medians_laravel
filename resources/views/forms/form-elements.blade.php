@extends('layout.master')
@section('title', 'Forms Elements')
@section('css')

@endsection
@section('main-content')


            <div class="wrapper main-wrapper row" style=''>

                <div class='col-xs-12'>
                    <div class="page-title">

                        <div class="pull-left">
                            <!-- PAGE HEADING TAG - START -->
                            <h1 class="title">Form Elements - Basic Fields</h1>
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
                                    <strong>Field Elements</strong>
                                </li>
                            </ol>
                        </div>

                    </div>
                </div>
                <div class="clearfix"></div>
                <!-- MAIN CONTENT AREA STARTS -->

                <div class="col-xs-12">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="title ">Basic Elements</h2>
                        </div>
                        <div class="card-body px-2">
                            <div class="w-full">
                                <div class="col-md-8 col-sm-9 col-xs-10">

                                    <div class="form-group">
                                        <label class="form-label" for="field-1">Name</label>
                                        <span class="desc">e.g. "LightLabs"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-1">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-2">Password</label>
                                        <span class="desc">e.g. "Cre@t!v!ty"</span>
                                        <div class="controls">
                                            <input type="password" value="Cre@t!v!ty" class="form-control form-control-solid py-3"
                                                id="field-2">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-3">Email</label>
                                        <span class="desc">e.g. "me@somesite.com"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="field-4">Placeholder</label>
                                        <span class="desc">e.g. "Username"</span>
                                        <div class="controls">
                                            <input type="text" id="field-4" placeholder="Enter your desired text"
                                                class="form-control form-control-solid py-3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label" for="field-5">Disabled</label>
                                        <span class="desc">e.g. "non-editable text"</span>
                                        <div class="controls">
                                            <input type="text" id="field-5" placeholder="Disabled input field"
                                                class="form-control form-control-solid py-3" disabled="disabled">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-6">Text area</label>
                                        <span class="desc">e.g. "Enter any size of text description here"</span>
                                        <div class="controls">
                                            <textarea class="form-control form-control-solid py-3" cols="5" id="field-6"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="form-label" for="field-7">Auto grow</label>
                                        <span class="desc">e.g. "This text area field auto grows"</span>
                                        <div class="controls">
                                            <textarea class="form-control form-control-solid py-3 autogrow" cols="5" id="field-7"
                                                placeholder="This textarea will grow in size with new lines."
                                                style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 50px;"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group has-error">
                                        <label class="form-label" for="field-8">Error Field</label>
                                        <span class="desc">e.g. "LightLabs"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-8"
                                                placeholder="I am a error field">
                                        </div>
                                    </div>

                                    <div class="form-group has-warning">
                                        <label class="form-label" for="field-9">Warning Field</label>
                                        <span class="desc">e.g. "LightLabs"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-9"
                                                placeholder="I am a warning field">
                                        </div>
                                    </div>

                                    <div class="form-group has-success">
                                        <label class="form-label" for="field-10">Success Field</label>
                                        <span class="desc">e.g. "LightLabs"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-10"
                                                placeholder="I am a success field">
                                        </div>
                                    </div>

                                    <div class="form-group has-info">
                                        <label class="form-label" for="field-11">Info Field</label>
                                        <span class="desc">e.g. "LightLabs"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-11"
                                                placeholder="I am a info field">
                                        </div>
                                    </div>

                                    <div class="form-group has-focus">
                                        <label class="form-label" for="field-12">Focus</label>
                                        <span class="desc">e.g. "LightLabs"</span>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-12"
                                                placeholder="I am a focused field ">
                                        </div>
                                    </div>

                                    <div class="form-group has-help">
                                        <label class="form-label" for="field-13">Help Field</label>
                                        <div class="controls">
                                            <input type="text" class="form-control form-control-solid py-3" id="field-13"
                                                placeholder="I am a help field">
                                            <span class="help-block">A help or brief description message of the input field.</span>
                                        </div>
                                    </div>

                                    <div class="form-group has-static">
                                        <label class="form-label">Static Field</label>
                                        <div class="controls">
                                            <p class="form-control form-control-solid py-3-static">A static text field</p>
                                        </div>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="col-md-12 col-lg-6 ">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="title ">Input Groups</h2>
                        </div>
                        <div class="card-body px-2">
                            <div class="w-full">
                                <div class="col-md-12">

                                    <div class="input-group transparent">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-solid py-3" placeholder="Transparent">
                                    </div>

                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            <i class="fa fa-envelope mt-2"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-solid py-3" placeholder="Default">
                                    </div>

                                    <br>

                                    <div class="input-group primary">
                                        <span class="input-group-addon">
                                            <span class="arrow"></span>
                                            <i class="fa fa-user mt-2"></i>
                                        </span>
                                        <input type="text" class="form-control form-control-solid py-3" placeholder="Primary">
                                    </div>

                                    <br>

                                    <div class="input-group primary">
                                        <input type="text" class="form-control form-control-solid py-3 text-right"
                                            placeholder="Right Align" aria-describedby="basic-addon1">
                                        <span class="input-group-addon" id="basic-addon1"><span class="arrow"></span><i
                                                class="fa fa-user mt-2"></i></span>
                                    </div>
                                    <br>

                                    <div class="input-group">
                                        <input type="text" class="form-control form-control-solid py-3"
                                            placeholder="Recipient's username" aria-describedby="basic-addon2">
                                        <span class="input-group-addon pt-4 w-auto" id="basic-addon2">@example.com</span>
                                    </div>
                                    <br>

                                    <div class="input-group primary">
                                        <span class="input-group-addon pt-4 ">$</span>
                                        <input type="text" class="form-control form-control-solid py-3"
                                            aria-label="Amount (to the nearest dollar)">
                                        <span class="input-group-addon pt-4 ">.00</span>
                                    </div>

                                    <br>

                                    <div class="input-group">
                                        <span class="input-group-addon pt-4 ">$</span>
                                        <input type="text" class="form-control form-control-solid py-3">
                                        <span class="input-group-addon pt-4 ">.00</span>
                                    </div>

                                    <br>

                                    <div class="input-group primary">
                                        <div class="input-group-btn w-auto h-100">
                                            <button type="button" class="btn btn-red h-100" data-toggle="dropdown">
                                                Action <span class="caret"></span>
                                            </button>

                                            <ul class="dropdown-menu dropdown-red no-spacing">
                                                <li><a href="#">Action</a></li>
                                                <li><a href="#">Another action</a></li>
                                                <li><a href="#">Something else here</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#">Separated link</a></li>
                                            </ul>
                                        </div>

                                        <input type="text"
                                            class="form-control form-control-solid py-3 no-left-border form-focus-red"
                                            placeholder="Dropdown">
                                    </div>

                                    <br>

                                    <div class="input-group m-bot15">
                                        <span class="input-group-addon">
                                            <input type="checkbox" class="iCheck">
                                        </span>
                                        <input type="text" class="form-control form-control-solid py-3"
                                            placeholder="Input with Checkbox">
                                    </div>

                                </div>
                            </div>

                        </div>
                    </section>
                </div>

                <div class="col-md-12 col-lg-6 ">
                    <section class="card ">
                        <div class="card-header pt-7">
                            <h2 class="title ">Element Sizes</h2>
                        </div>
                        <div class="card-body">
                            <div class="w-full">

                                <input class="form-control form-control-solid py-3 input-lg m-bot15" type="text"
                                    placeholder=".input-lg">
                                <br>
                                <input class="form-control form-control-solid py-3 m-bot15" type="text" placeholder="Default input">
                                <br>
                                <input class="form-control form-control-solid py-3 input-sm m-bot15" type="text"
                                    placeholder=".input-sm">
                                <br>

                                <select class="form-control form-control-solid py-3 m-bot15">
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                </select>

                            </div>
                        </div>
                    </section>
                </div>

                <!-- MAIN CONTENT AREA ENDS -->
            </div>
            
@endsection

@section('script')
<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

<!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
@endsection