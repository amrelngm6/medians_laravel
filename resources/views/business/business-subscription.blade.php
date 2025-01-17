<!DOCTYPE html>
<html lang="en" dir="@if(app()->getLocale() === 'ar') rtl @endif">

<!-- Start HEAD -->

<head>
    <!-- All meta and title start-->
    @include('layout.head')
    <!-- meta and title end-->

    <!-- css start-->
    @include('layout.css')
    <!-- css end-->

    <style>
    /* Mark input boxes that gets an error on validation: */
    input.invalid {
        background-color: #ffdddd !important;
    }

    /* Hide all steps by default: */
    .tab.active {
        display: block;
    }
    .tab {
        display: none;
    }
    
    /* Make circles that indicate the steps of the form: */
    .step {
        height: 15px;
        width: 15px;
        margin: 0 2px;
        background-color: #bbbbbb;
        border: none;
        border-radius: 50%;
        display: inline-block;
        opacity: 0.5;
    }

    .step.active {
        background-color: #002757 !important;
        opacity: 1;
    }

    /* Mark the steps that are finished and valid: */
    .step.finish {
        background-color: #f02757 !important;
        opacity: 1;
    }
    </style>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="@if(app()->getLocale() === 'ar') rtl @endif" data-theme="light">

    <!-- START TOPBAR -->
    @include('layout.header')
    <!-- END TOPBAR -->

    <div class="col-lg-12 container mx-auto">

        <div class="wrapper main-wrapper row" style=''>

            <div class='col-xs-12'>
                <div class="page-title">

                    <div class="pull-left">
                        <!-- PAGE HEADING TAG - START -->
                        <h1 class="title">Business Subscription</h1>
                        <!-- PAGE HEADING TAG - END -->
                    </div>

                </div>
            </div>
            <div class="clearfix"></div>
            <!-- MAIN CONTENT AREA STARTS -->

            <div class="col-sm-12">
                <div class="card  mt-5 flex ">
                    <div class="card-body ">
                        <div
                            class="notice d-flex bg-light-primary rounded border-primary border border-dashed rounded-3 p-6">
                            <div class="d-flex flex-stack flex-grow-1 ">
                                <div class=" fw-semibold">
                                    @if (empty(Auth::user()->subscription))
                                    <h4 class="mb-0 text-gray-900 fw-bold">This is your first subscription!</h4>
                                    @elseif (isset(Auth::user()->subscription) && Auth::user()->subscription->expired)
                                    <h4 class="text-gray-900 fw-bold">Upgrade your subscription!</h4>
                                    <div class="fs-6 text-gray-700 ">Upgrade your package to increase the limited
                                        available features</div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <section class="card block">
                    <div class="clearfix content-body">
                        <div class="w-full">
                            <div class="col-xs-12">

                                <form id="subscriptionForm" method="POST" class="ajax-form" action="{{route('Business.subscribe')}}">
                                    @csrf
                                    <div id="pills" class="wizardpills">
                                        
                                        <ul class="form-wizard nav nav-pills">
                                            <li id="tab-1" class=""><a href="#pills-tab1" data-toggle="tab"
                                            class="step"  aria-expanded="false"><span>Business</span></a></li>
                                            <li id="tab-2" class=""><a href="#pills-tab2" data-toggle="tab" 
                                            class="step" aria-expanded="true"><span>Package</span></a></li>
                                            <!-- <li id="tab-3" class=""><a href="#pills-tab3" 
                                            class="step" data-toggle="tab"><span>Configuration</span></a></li>
                                            <li id="tab-4" class=""><a href="#pills-tab4" 
                                            class="step" data-toggle="tab"><span>Confirm</span></a></li> -->
                                        </ul>

                                        <div id="bar" class="progress active">
                                            <div class="progress-bar progress-bar-primary " role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                                        </div>
                                        

                                    </div>
                                    <div class="tab tab-pane " id="pills-tab1">
                                        <h4 class="pt-10">Business Information</h4>

                                        <div class="form-group">
                                            <label for="businessname" class="form-label">Full Name</label>
                                            <div class="controls">
                                                <input type="text"
                                                    oninput="this.className = 'form-control form-control-solid py-3'"
                                                    placeholder="Your Business Name"
                                                    class="form-control form-control-solid py-3" name="business[name]"
                                                    id="businessname">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="form-label">Cats</label>
                                            <div class="controls">
                                                <select class="form-control form-control-solid" name="business[category_id]">
                                                    @foreach ($categories as $category)
                                                    <option value="{{$category->id}}">{{$category->name}}
                                                    </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab tab-pane " id="pills-tab2">
                                        
                                        <h4>Profile Information</h4>
                                        <br>

                                        <div class="form-group">
                                            <label class="form-label">Business Brief</label>
                                            <div class="controls">
                                                <textarea type="text"
                                                    placeholder="Tell us what does your busines provide"
                                                    class="form-control form-control-solid py-3"
                                                    name="description" id="brief"> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="tab tab-pane " id="pills-tab3">

                                    </div>
                                    <div class="tab tab-pane " id="pills-tab4">
                                        
                                    </div> -->
                                    <div style="overflow:auto;">
                                        <ul class="pager wizard">
                                            <li class="previous"><a id="prevBtn" onclick="nextPrev(-1)" href="javascript:;">Previous</a></li>
                                            <li class="next"><a id="nextBtn" onclick="nextPrev(1)" href="javascript:;">Next</a></li>
                                        </ul>
                                    </div>
                                    <!-- Circles which indicates the steps of the form: -->
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <!-- MAIN CONTENT AREA ENDS -->
        </div>
    </div>


    <!-- Footer Section start -->
    @include('layout.footer')
    <!-- Footer Section end -->
    </div>

    <!--customizer-->
    <div id="customizer"></div>

    <!-- scripts start-->
    @include('layout.script')

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
    <script src="{{asset('assets/plugins/jquery-validation/js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
    <script src="{{asset('assets/js/form-validation.js')}}"></script>
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
    <script>
    var currentTab = 0; // Current tab is set to be the first tab (0)

    $(document).ready(function() {

        showTab(currentTab); // Display the current tab

        // //Form Wizard Validations
        // var $validator = $("#subscriptionForm").validate({
        //     rules: {
        //         businessname: {
        //             required: true,
        //             minlength: 3
        //         },
        //         txtEmail: {
        //             required: true,
        //             email: true,
        //         },
        //         txtPhone: {
        //             number: true,
        //             required: true,
        //         }
        //     },
        //     errorPlacement: function(label, element) {
        //         $('<span class="arrow"></span>').insertBefore(element);
        //         $('<span class="error"></span>').insertAfter(element).append(label)
        //     }
        // });
    });

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        for (let i = 0; i < x.length; i++) {
            jQuery(x[i]).removeClass('active')
        }
    
        if (x[n]) 
            x[n].className += " active";
    
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:
        for (let i = 0; i < x.length; i++) {
            jQuery(x[i]).removeClass('active')
        }
        jQuery(x[currentTab]).addClass('active')
        // Increase or decrease the current tab by 1:
        currentTab = currentTab + n;
        // if you have reached the end of the form...
        if (currentTab >= x.length) {
            // ... the form gets submitted:
            submitForm('subscriptionForm', null);
            return false;
        }
        // Otherwise, display the correct tab:
        showTab(currentTab);
    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab] ? x[currentTab].getElementsByTagName("input") : [];
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
        jQuery('.progress-bar').css('width', (n+1)*20+'%')
        jQuery('#tab-'+(n+1)).addClass('active')
    }
    </script>
    <!-- scripts end-->
    <input type="hidden" id="csrf-input" value="{{@csrf_token()}}" />
</body>

</html>