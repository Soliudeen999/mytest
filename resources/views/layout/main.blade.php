<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Orbiter is a bootstrap minimal & clean admin template">
        <meta name="keywords" content="admin, admin panel, admin template, admin dashboard, responsive, bootstrap 4, ui kits, ecommerce, web app, crm, cms, html, sass support, scss">
        <meta name="author" content="Themesbox">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title> @yield('title') </title>
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">
        <!-- Start CSS -->   
        @yield('style')
        <link href="{{ asset('assets/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/flag-icon.min.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/custom_css.css') }}" rel="stylesheet" type="text/css">
        <!-- End CSS -->
    </head>
    <body class="vertical-layout">
        <!-- Start Infobar Setting Sidebar -->
        @include('sweetalert::alert')

        <div class="row mx-0">
            <div class="col-auto pr-0 bg-primary" style="height: auto; color: white; margin-right: 0px !important;">
                <ul class="list-group pt-5">
                    <li class="list-group-item d-flex mt-5 justify-content-between align-items-center no-border">
                        <a href="#" class="active"><i class="feather icon-inbox white mr-2"></i></a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border">
                        <a href="#"><i class="feather icon-star mr-2 white"></i></a>
                
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border">
                        <a href="#"><i class="feather icon-clock mr-2 white"></i></a>
                  
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border">
                        <a href="#"><i class="feather icon-send mr-2 white"></i></a>
                   
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border">
                        <a href="#"><i class="feather icon-file mr-2 white"></i></a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border">
                        <a href="#"><i class="feather icon-award mr-2 white"></i></a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border">
                        <a href="#"><i class="feather icon-alert-octagon mr-2 white"></i></a>

                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center no-border mt-10">
                        <a href="#"><i class="feather icon-trash mr-2 white"></i></a>

                    </li>
                </ul>      
            </div>
            <div class="col pl-0" style="margin-left: 0px !important;">
                
                <div class="infobar-settings-sidebar-overlay"></div>
                <!-- End Infobar Setting Sidebar -->
                <!-- Start Containerbar -->
                <div id="containerbar">     
                    <!-- Start Leftbar -->
                    @include('layout.leftbar')
                    <!-- End Leftbar -->
                    <!-- Start Rightbar -->
                    @include('layout.rightbar')          
                    @yield('content')
                    <!-- End Rightbar --> 
                </div>
            </div>
        </div>
        <!-- End Containerbar -->
        <!-- Start JS -->        
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
        <script src="{{ asset('assets/js/detect.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('assets/js/vertical-menu.js') }}"></script> 
        <script src="{{ asset('assets/plugins/switchery/switchery.min.js') }}"></script> 
        @yield('script')
        <!-- Core JS -->
        <script src="{{ asset('assets/js/core.js') }}"></script>
        <!-- End JS -->
    </body>
</html>    