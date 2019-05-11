@extends('sites.layouts.master')
@section('title')
About - Runtah WEB
@endsection
@section('header')
<!-- Background Image -->
<div class="bg-img" style="background-image: url({{asset('sites/img/a-lucu/a5.jpg')}});">
    <div class="overlay"></div>
</div>
<!-- home wrapper -->
<div class="home-wrapper">
    <div class="container">
        <div class="row">

            <!-- home content -->
            <div class="col-md-10 col-md-offset-1">
                <div class="home-content">
                    <h2 class="white-text">About</h2>
                    <p class="white-text">
                        <i>Siapakah orang yang berada dibalik layar ini?</i>
                    </p>


                </div>
            </div>
            <!-- /home content -->

        </div>
    </div>
</div>
<!-- /home wrapper -->
@endsection
@section('content')
<!-- Service -->
<div id="service" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Apa itu Runtah Web?</h2>
                <div class="blog-details-content section-padding-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="">
                                <!-- Blog Details Text -->
                                <div class="blog-details-text">
                                    <p>Aplikasi yang akan dibuat adalah Aplikasi Runtah, yang merupakan aplikasi
                                        yang
                                        memungkinkann
                                        pengguna bekerjasama dengan pemerintah dalam guna pembersihan atau
                                        pengelolaan
                                        limbah yang
                                        ada di suatu wilayah. Dengan aplikasi ini, akan mempermudah Pemerintah dalam
                                        mengelola
                                        limbah-limbah yang ada, dan mungkin bisa sebagai solusi pengelolaan limbah
                                        yang
                                        menjadi
                                        masalah utama di Indonesia. Selain itu, dengan aplikasi ini, kita juga bisa
                                        memonitoring
                                        Pemerintahan dalam pengelolaan limbah yang ada. Di aplikasi ini juga
                                        terdapat
                                        tutorial atau
                                        tips & trik dalam mengelola sampah yang bisa dibagikan oleh pengguna
                                        aplikasi ke
                                        sesama
                                        pengguna aplikasi.</p>
                                    <!-- Tags -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Section header -->



        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Service -->



<!-- Team -->
<div id="team" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Our Team</h2>
            </div>
            <!-- /Section header -->

            <!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('sites/img/4.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/intanaidarhmn/"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Intan Aida Rahmani</h3>
                        <span>Front-End Developer</span>
                    </div>
                </div>
            </div>
            <!-- /team -->

            <!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('sites/img/1.png')}}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="http://www.facebook.com/v.kamil7"><i class="fa fa-facebook"></i></a>
                                <a href="http://www.instagram.com/mkamilmistar"><i class="fa fa-instagram"></i></a>
                                <a href="http://www.twitter.com/mkamilmistar"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>M. Kamil</h3>
                        <span>Back-End Developer</span>
                    </div>
                </div>
            </div>
            <!-- /team -->

            <!-- team -->
            <div class="col-sm-4">
                <div class="team">
                    <div class="team-img">
                        <img class="img-responsive" src="{{asset('sites/img/2.jpg')}}" alt="">
                        <div class="overlay">
                            <div class="team-social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/tengkusandra/"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="team-content">
                        <h3>Tengku Sandra Alyssa</h3>
                        <span>Back-End Developer</span>
                    </div>
                </div>
            </div>
            <!-- /team -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Team -->
@endsection