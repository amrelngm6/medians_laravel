<!DOCTYPE html>
<html lang="en" dir="@if(app()->getLocale() === 'ar') rtl @endif">

<!-- Start HEAD -->

<head>
    @section('title', 'Sign up')
    @include('layout.head')
    @include('layout.css')
</head>

<body class="loginpage @if(app()->getLocale() === 'ar') rtl @endif">


    <div class="login-bg w-full" style="background-image: url(/data/dashboard/login-bg.jpg);">

        <form action="{{route('api.signup')}}" id="signup-form" class="form ajax-form mx-auto my-20">
            @csrf <!-- {{ csrf_field() }} -->

            <div class="flex-column">
                <label>Name </label>
            </div>
            <div class="inputForm">
                <svg height="18" viewBox="0 0 24 24" class="position-absolute mx-4 mb-2" width="18"
                    xmlns="http://www.w3.org/2000/svg">
                    <g id="页面-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="User" transform="translate(-576.000000, 0.000000)" fill-rule="nonzero">
                            <g id="badge_line" transform="translate(576.000000, 0.000000)">
                                <path
                                    d="M24,0 L24,24 L0,24 L0,0 L24,0 Z M12.5934901,23.257841 L12.5819402,23.2595131 L12.5108777,23.2950439 L12.4918791,23.2987469 L12.4918791,23.2987469 L12.4767152,23.2950439 L12.4056548,23.2595131 C12.3958229,23.2563662 12.3870493,23.2590235 12.3821421,23.2649074 L12.3780323,23.275831 L12.360941,23.7031097 L12.3658947,23.7234994 L12.3769048,23.7357139 L12.4804777,23.8096931 L12.4953491,23.8136134 L12.4953491,23.8136134 L12.5071152,23.8096931 L12.6106902,23.7357139 L12.6232938,23.7196733 L12.6232938,23.7196733 L12.6266527,23.7031097 L12.609561,23.275831 C12.6075724,23.2657013 12.6010112,23.2592993 12.5934901,23.257841 L12.5934901,23.257841 Z M12.8583906,23.1452862 L12.8445485,23.1473072 L12.6598443,23.2396597 L12.6498822,23.2499052 L12.6498822,23.2499052 L12.6471943,23.2611114 L12.6650943,23.6906389 L12.6699349,23.7034178 L12.6699349,23.7034178 L12.678386,23.7104931 L12.8793402,23.8032389 C12.8914285,23.8068999 12.9022333,23.8029875 12.9078286,23.7952264 L12.9118235,23.7811639 L12.8776777,23.1665331 C12.8752882,23.1545897 12.8674102,23.1470016 12.8583906,23.1452862 L12.8583906,23.1452862 Z M12.1430473,23.1473072 C12.1332178,23.1423925 12.1221763,23.1452606 12.1156365,23.1525954 L12.1099173,23.1665331 L12.0757714,23.7811639 C12.0751323,23.7926639 12.0828099,23.8018602 12.0926481,23.8045676 L12.108256,23.8032389 L12.3092106,23.7104931 L12.3186497,23.7024347 L12.3186497,23.7024347 L12.3225043,23.6906389 L12.340401,23.2611114 L12.337245,23.2485176 L12.337245,23.2485176 L12.3277531,23.2396597 L12.1430473,23.1473072 Z"
                                    id="MingCute" fill-rule="nonzero"> </path>
                                <path
                                    d="M14.4472,1.10555 C14.9412,1.35254 15.1414,1.95321 14.8944,2.44719 L14.118,3.99997 L18,3.99997 C19.1046,3.99997 20,4.89541 20,5.99998 L20,20 C20,21.1045 19.1046,22 18,22 L6,22 C4.89543,22 4,21.1045 4,20 L4,5.99998 C4,4.89541 4.89543,3.99997 6,3.99997 L9.88197,3.99997 L9.10557,2.44719 C8.85858,1.95321 9.05881,1.35254 9.55279,1.10555 C10.0468,0.858558 10.6474,1.05878 10.8944,1.55276 L12,3.76391 L13.1056,1.55276 C13.3526,1.05878 13.9532,0.858558 14.4472,1.10555 Z M10.882,5.99998 L6,5.99998 L6,20 L18,20 L18,5.99998 L13.0002,5.99998 C12.9999,6.36652 12.7974,6.71932 12.4472,6.8944 C11.9532,7.14139 11.3526,6.94117 11.1056,6.44719 L10.882,5.99998 Z M13.5,14 C14.8807,14 16,15.1193 16,16.5 L16,17 C16,17.5523 15.5523,18 15,18 C14.4477,18 14,17.5523 14,17 L14,16.5 C14,16.2238 13.7761,16 13.5,16 L10.5,16 C10.2239,16 10,16.2238 10,16.5 L10,17 C10,17.5523 9.55228,18 9,18 C8.44772,18 8,17.5523 8,17 L8,16.5 C8,15.1193 9.11929,14 10.5,14 L13.5,14 Z M12,8.99998 C13.1046,8.99998 14,9.89541 14,11 C14,12.1045 13.1046,13 12,13 C10.8954,13 10,12.1045 10,11 C10,9.89541 10.8954,8.99998 12,8.99998 Z"
                                    fill="#09244B"> </path>
                            </g>
                        </g>
                    </g>
                </svg>
                <input type="text" name="name" class="input px-12" placeholder="Enter your Name">
            </div>

            <div class="flex-column">
                <label>Email </label>
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
                <input type="text" name="email" class="input px-12" placeholder="Enter your Email">
            </div>

            <div class="flex-column">
                <label>Password </label>
            </div>
            <div class="inputForm relative">
                <svg height="18" viewBox="-64 0 512 512" class="position-absolute mx-4 mb-2" width="18"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill="#09244B"
                        d="m336 512h-288c-26.453125 0-48-21.523438-48-48v-224c0-26.476562 21.546875-48 48-48h288c26.453125 0 48 21.523438 48 48v224c0 26.476562-21.546875 48-48 48zm-288-288c-8.8125 0-16 7.167969-16 16v224c0 8.832031 7.1875 16 16 16h288c8.8125 0 16-7.167969 16-16v-224c0-8.832031-7.1875-16-16-16zm0 0">
                    </path>
                    <path fill="#09244B"
                        d="m304 224c-8.832031 0-16-7.167969-16-16v-80c0-52.929688-43.070312-96-96-96s-96 43.070312-96 96v80c0 8.832031-7.167969 16-16 16s-16-7.167969-16-16v-80c0-70.59375 57.40625-128 128-128s128 57.40625 128 128v80c0 8.832031-7.167969 16-16 16zm0 0">
                    </path>
                </svg>
                <input type="password" name="password" class="input px-12" placeholder="Enter your Password">
                <svg viewBox="0 0 576 512" height="1em" class="position-absolute mx-2 mb-2 right-0"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M288 32c-80.8 0-145.5 36.8-192.6 80.6C48.6 156 17.3 208 2.5 243.7c-3.3 7.9-3.3 16.7 0 24.6C17.3 304 48.6 356 95.4 399.4C142.5 443.2 207.2 480 288 480s145.5-36.8 192.6-80.6c46.8-43.5 78.1-95.4 93-131.1c3.3-7.9 3.3-16.7 0-24.6c-14.9-35.7-46.2-87.7-93-131.1C433.5 68.8 368.8 32 288 32zM144 256a144 144 0 1 1 288 0 144 144 0 1 1 -288 0zm144-64c0 35.3-28.7 64-64 64c-7.1 0-13.9-1.2-20.3-3.3c-5.5-1.8-11.9 1.6-11.7 7.4c.3 6.9 1.3 13.8 3.2 20.7c13.7 51.2 66.4 81.6 117.6 67.9s81.6-66.4 67.9-117.6c-11.1-41.5-47.8-69.4-88.6-71.1c-5.8-.2-9.2 6.1-7.4 11.7c2.1 6.4 3.3 13.2 3.3 20.3z">
                    </path>
                </svg>
            </div>

            <div class="flex-row fs-5">
                <div class="flex gap-2">
                    <input type="checkbox" />
                    <label class="pt-2">Remember me </label>
                </div>
                <span class="fs-5 pt-2">Forgot password ?</span>
            </div>
            <button type="submit" class="btn btn-primary">Sign Up</button>
            <p class="text-center fs-5">Already have an account ? <a href="{{route(App::getLocale() . '.pages_login')}}"
                    class="fs-5 text-danger">Sign in</a>

            </p>
            <p class="text-center line">Or With</p>

            <div class="flex-row">
                <button class="btn btn-primary fs-5">
                    <svg version="1.1" width="20" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512"
                        style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <path style="fill:#FBBB00;" d="M113.47,309.408L95.648,375.94l-65.139,1.378C11.042,341.211,0,299.9,0,256
c0-42.451,10.324-82.483,28.624-117.732h0.014l57.992,10.632l25.404,57.644c-5.317,15.501-8.215,32.141-8.215,49.456
C103.821,274.792,107.225,292.797,113.47,309.408z"></path>
                        <path style="fill:#518EF8;" d="M507.527,208.176C510.467,223.662,512,239.655,512,256c0,18.328-1.927,36.206-5.598,53.451
c-12.462,58.683-45.025,109.925-90.134,146.187l-0.014-0.014l-73.044-3.727l-10.338-64.535
c29.932-17.554,53.324-45.025,65.646-77.911h-136.89V208.176h138.887L507.527,208.176L507.527,208.176z"></path>
                        <path style="fill:#28B446;" d="M416.253,455.624l0.014,0.014C372.396,490.901,316.666,512,256,512
c-97.491,0-182.252-54.491-225.491-134.681l82.961-67.91c21.619,57.698,77.278,98.771,142.53,98.771
c28.047,0,54.323-7.582,76.87-20.818L416.253,455.624z"></path>
                        <path style="fill:#F14336;" d="M419.404,58.936l-82.933,67.896c-23.335-14.586-50.919-23.012-80.471-23.012
c-66.729,0-123.429,42.957-143.965,102.724l-83.397-68.276h-0.014C71.23,56.123,157.06,0,256,0
C318.115,0,375.068,22.126,419.404,58.936z"></path>

                    </svg>
                    Google
                </button><button class="btn btn-primary text-white fs-5">
                    <svg version="1.1" height="20" width="20" fill="#fff" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 22.773 22.773"
                        style="enable-background:new 0 0 22.773 22.773;" xml:space="preserve">
                        <g>
                            <g>
                                <path
                                    d="M15.769,0c0.053,0,0.106,0,0.162,0c0.13,1.606-0.483,2.806-1.228,3.675c-0.731,0.863-1.732,1.7-3.351,1.573 c-0.108-1.583,0.506-2.694,1.25-3.561C13.292,0.879,14.557,0.16,15.769,0z">
                                </path>
                                <path
                                    d="M20.67,16.716c0,0.016,0,0.03,0,0.045c-0.455,1.378-1.104,2.559-1.896,3.655c-0.723,0.995-1.609,2.334-3.191,2.334 c-1.367,0-2.275-0.879-3.676-0.903c-1.482-0.024-2.297,0.735-3.652,0.926c-0.155,0-0.31,0-0.462,0 c-0.995-0.144-1.798-0.932-2.383-1.642c-1.725-2.098-3.058-4.808-3.306-8.276c0-0.34,0-0.679,0-1.019 c0.105-2.482,1.311-4.5,2.914-5.478c0.846-0.52,2.009-0.963,3.304-0.765c0.555,0.086,1.122,0.276,1.619,0.464 c0.471,0.181,1.06,0.502,1.618,0.485c0.378-0.011,0.754-0.208,1.135-0.347c1.116-0.403,2.21-0.865,3.652-0.648 c1.733,0.262,2.963,1.032,3.723,2.22c-1.466,0.933-2.625,2.339-2.427,4.74C17.818,14.688,19.086,15.964,20.67,16.716z">
                                </path>
                            </g>
                        </g>
                    </svg>
                    Apple
                </button>
            </div>
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