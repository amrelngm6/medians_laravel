<!DOCTYPE html>
<html lang="en">

<head>
    @section('title', 'PAGE 404')
    @include('layout.head')
    @include('layout.css')
</head>

<body class="">

    
<div class="container-fluid overflow-x-hidden">
        <div class="row">

            <div class="col-lg-12">
                <section class="box nobox ">
                    <div class="content-body">
                        <div class="row">
                            <div class="col-xs-12">

                                <h1 class="page_error_code text-primary">404</h1>
                                <h1 class="page_error_info">Oops! Page Not Found</h1>
                                <div class="row">
                                    <div class="col-md-offset-3 col-sm-offset-3 col-xs-offset-2 col-xs-8 col-sm-6">
                                        <form action="javascript:;" method="post" class="page_error_search">
                                            <div class="input-group transparent">
                                                <span class="input-group-addon h-45px pt-5">
                                                    <i class="fa fa-search icon-primary "></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="Try a new search">
                                                <input type='submit' value="">
                                            </div>
                                            <div class="text-center page_error_btn">
                                                <a class="btn btn-primary btn-lg" href='/'><i class='fa fa-location-arrow'></i> &nbsp; Back to Home</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
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

    @section('script')
    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - START -->

    <!-- OTHER SCRIPTS INCLUDED ON THIS PAGE - END -->
    @endsection

    <!-- CORE TEMPLATE JS - START -->
    <script src="/assets/js/scripts.js"></script>
    <!-- END CORE TEMPLATE JS - END -->

</body>

</html>