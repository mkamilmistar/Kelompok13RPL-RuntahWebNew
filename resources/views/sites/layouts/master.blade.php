<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>@yield('title')</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="{{asset('/sites')}}/css/bootstrap.min.css" />

    <!-- Owl Carousel -->
    <link type="text/css" rel="stylesheet" href="{{asset('/sites')}}/css/owl.carousel.css" />
    <link type="text/css" rel="stylesheet" href="{{asset('/sites')}}/css/owl.theme.default.css" />

    <!-- Magnific Popup -->
    <link type="text/css" rel="stylesheet" href="{{asset('/sites')}}/css/magnific-popup.css" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{asset('/sites')}}/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="{{asset('/sites')}}/css/style.css" />
    <link rel="icon" href="{{asset('/sites')}}/img/core-img/favicon.ico">

</head>

<body>
    <!-- Header -->
    <header id="home">
        <!-- /Nav -->
        @include('sites.layouts.includes._navbar')
        <!-- ##### Header Area End ##### -->
        @yield('header')
    </header>

    @yield('content')

    <!-- Footer -->
    <footer id="footer" class="sm-padding bg-dark">

        <!-- Container -->
        <div class="container">

            <!-- Row -->
            <div class="row">

                <div class="col-md-12">

                    <!-- footer logo -->
                    <div class="footer-logo">
                        <a href="/"><img src="{{asset('/sites')}}/img/logo2.png" alt="logo"></a>
                    </div>
                    <!-- /footer logo -->

                    <!-- footer follow -->
                    <ul class="footer-follow">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                    <!-- /footer follow -->

                    <!-- footer copyright -->
                    <div class="footer-copyright p">
                        <p>Copyright © 2019. All Rights Reserved</p>
                    </div>
                    <!-- /footer copyright -->

                </div>

            </div>
            <!-- /Row -->

        </div>
        <!-- /Container -->

    </footer>
    <!-- /Footer -->

    <!-- Back to top -->
    <div id="back-to-top"></div>
    <!-- /Back to top -->

    <!-- Preloader -->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <!-- /Preloader -->
    <!-- jQuery Plugins -->
    <script type="text/javascript" src="{{asset('/sites')}}/js/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('/sites')}}/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{asset('/sites')}}/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="{{asset('/sites')}}/js/jquery.magnific-popup.js"></script>
    <script type="text/javascript" src="{{asset('/sites')}}/js/main.js"></script>
    <script src="{{asset('/sites')}}/js/bootstrap/popper.min.js"></script>
    <script src="{{asset('/sites')}}/js/plugins/plugins.js"></script>
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

</html>