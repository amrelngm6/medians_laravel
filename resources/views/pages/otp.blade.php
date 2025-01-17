<!DOCTYPE html>
<html lang="en" dir="@if(app()->getLocale() === 'ar') rtl @endif">

<!-- Start HEAD -->
<head>
@section('title', 'Verify account')
@include('layout.head')
@include('layout.css')
</head>

<body class="loginpage @if(app()->getLocale() === 'ar') rtl @endif">

        <div class="login-bg w-full" style="background-image: url(/data/dashboard/login-bg.jpg);">
            <form action="{{route('OTP.verify')}}" id="otp-form" class="form ajax-form mx-auto my-20">
                @csrf
                <div class="w-full text-center  pt-4">
                    <h3 class="py-2">Verify your account</h3>
                    <p>Check your Email to get your OTP then<br /> insert it below</p>
                </div>
                <hr />
                <div class="flex-column">
                    <label>OTP Code </label>
                </div>
                <div class="inputForm">
                    <svg height="18" viewBox="0 0 32 32" class="position-absolute mx-4 mb-2" width="18"
                        xmlns="http://www.w3.org/2000/svg">
                        <g id="Layer_3" data-name="Layer 3">
                            <path fill="#09244B"
                                d="m30.853 13.87a15 15 0 0 0 -29.729 4.082 15.1 15.1 0 0 0 12.876 12.918 15.6 15.6 0 0 0 2.016.13 14.85 14.85 0 0 0 7.715-2.145 1 1 0 1 0 -1.031-1.711 13.007 13.007 0 1 1 5.458-6.529 2.149 2.149 0 0 1 -4.158-.759v-10.856a1 1 0 0 0 -2 0v1.726a8 8 0 1 0 .2 10.325 4.135 4.135 0 0 0 7.83.274 15.2 15.2 0 0 0 .823-7.455zm-14.853 8.13a6 6 0 1 1 6-6 6.006 6.006 0 0 1 -6 6z">
                            </path>
                        </g>
                    </svg>
                    <input type="text" name="otp" class="input px-12" placeholder="OTP Code here">
                </div>
                
                <button type="submit" class="btn btn-primary">Verify</button>
            </form>
        </div>
        <!-- LOAD FILES AT PAGE END FOR FASTER LOADING -->

        <!-- CORE JS FRAMEWORK - START -->
        <script src="/assets/js/jquery.min.js"></script>
        <script src="/assets/js/jquery.easing.min.js"></script>
        <script src="/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script src="/assets/plugins/pace/pace.min.js"></script>
        <script src="/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
        <script src="/assets/plugins/viewport/viewportchecker.js"></script>
        <script>
            window.jQuery || document.write('<script src="/assets/js/jquery.min.js"><\/script>');
        </script>
        <!-- CORE JS FRAMEWORK - END -->

        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->
        <script src="{{asset('assets/plugins/sweetalert/sweetalert2-11.js')}}"></script>
        <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->

        <!-- CORE TEMPLATE JS - START -->
        <script src="/assets/js/scripts.js"></script>
        <!-- END CORE TEMPLATE JS - END -->

    </body>

</html>