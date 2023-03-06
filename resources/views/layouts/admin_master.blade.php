=<!doctype html>
<html lang="en">
    <head>
        <!--Required Meta Tags-->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="description">
        <!-- Title Of Site -->
        <title>Acadomart - Admin</title>
        <!-- Favicon -->
        <link rel="shortcut icon" href="{{ asset('default/assets/images/favicon.png')}}" />
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="{{ asset('default/assets/css/plugins.css')}}" />
        <!-- Main Style CSS -->
        <link rel="stylesheet" href="{{ asset('default/assets/css/style.css')}}" />
        <link rel="stylesheet" href="{{ asset('default/assets/css/responsive.css')}}" />
    </head>

        @include('layouts.admin_header')

            <!--Body Container-->
            @yield('content')
                
                    <!--End Main Content-->
                </div>
                <!--End Container-->
            </div>
            <!--End Body Container-->
            <!--End Body Container-->

        

            <!--Scoll Top-->
            <span id="site-scroll"><i class="icon an an-arw-up"></i></span> 
            <!--End Scoll Top-->

            <!--MiniCart Drawer-->
            <div class="minicart-right-drawer modal right fade" id="minicart-drawer">
                <div class="modal-dialog">
                    <div class="modal-content">

                    </div>
                </div>
            </div>
            <!--End MiniCart Drawer-->
            <div class="modalOverly"></div>



            
            <!-- Including Jquery -->
            <script src="{{ asset('default/assets/js/vendor/jquery-min.js')}}"></script>
            <script src="{{ asset('default/assets/js/vendor/js.cookie.js')}}"></script>
            <!--Including Javascript-->
            <script src="{{ asset('default/assets/js/plugins.js')}}"></script>
            <script src="{{ asset('default/assets/js/main.js')}}"></script>

            
        </div>
        <!--End Page Wrapper-->
    </body>
</html>