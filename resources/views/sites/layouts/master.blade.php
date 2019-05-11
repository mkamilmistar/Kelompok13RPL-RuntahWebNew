<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *Must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- Favicon -->
    <link rel="icon" href="{{asset('/sites')}}/img/core-img/favicon.ico">
    <link rel="stylesheet" href="{{asset('admin/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{asset('/sites')}}/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="spinner"></div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header-area d-flex justify-content-between align-items-center">
            <!-- Contact Info -->
            <div class="contact-info">
                <a href="#"><span>Phone:</span> +6282283777098</a>
                <a href="#"><span>Email:</span> info@runtahweb.com</a>
            </div>
            <!-- Follow Us -->
            <div class="follow-us">
                <span>Follow us</span>
                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </div>
        </div>

        <!-- Navbar Area -->


        @include('sites.layouts.includes._navbar')


    </header>
    <!-- ##### Header Area End ##### -->



    @yield('content')

    <!-- ##### Footer Area Start ##### -->
    @include('sites.layouts.includes._footer')
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="{{asset('/sites')}}/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('/sites')}}/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('/sites')}}/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="{{asset('/sites')}}/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="{{asset('/sites')}}/js/active.js"></script>
    <!-- CK editor -->
    <script src="{{asset('admin/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <script>
        @if(Session::has('sukses'))
        // Display a success toast, with a title
        toastr.success("{{Session::get('sukses')}}", "Sukses")
        @endif
    </script>


    @yield('script')
</body>
</body>

</html>