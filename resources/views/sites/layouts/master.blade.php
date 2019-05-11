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
                        <a href="index.html"><img src="{{asset('/sites')}}/img/logo2.png" alt="logo"></a>
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
    <!-- Modal daftar -->
    <div id="mydaftar" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Register a New Volunteer</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group has-feedback">
                            <input type="text" id="username" class="form-control" placeholder="Username" name="username" required autocomplete="username">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="email" id="email" class="form-control" placeholder="Email" name="email" required autocomplete="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" id="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" id="password-confirm" class="form-control" placeholder="Retype password" name="password_confirmation" required autocomplete="new-password">
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>
                    </form>
                    <a href="" class="text-center">I already have a
                        membership</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Daftar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!-- end modal daftar -->

    <!-- Modal login -->
    <div id="mylogin" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Log In to Start Your Session</h4>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" placeholder="Email" name="email">
                            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" placeholder="Password" name="password">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <div class="row">
                            <div class="col-xs-8">
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox"> Remember Me
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>
                    <a href="#">I forgot my password</a><br>
                    <a href="/register" class="text-center">Register a new membership</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal">Login</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>
    <!-- End Modal Login -->

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