@extends('sites.layouts.master')
@section('title')
About - Runtah WEB
@endsection
@section('content')
<!-- ##### Catagory Area Start ##### -->
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/bg-img/bg0.jpg);">
    <div class="blog-details-headline">
        <h3>About Runtah Web</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="/">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="/">Volunteer &amp; Non-Profit</a>
        </div>
    </div>
</div>
<!-- ##### Catagory Area End ##### -->

<!-- ##### Blog Details Content ##### -->
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <!-- Blog Details Text -->
                <div class="blog-details-text">
                    <p>Aplikasi yang akan dibuat adalah Aplikasi Runtah, yang merupakan aplikasi yang memungkinkann pengguna bekerjasama dengan pemerintah dalam guna pembersihan atau pengelolaan limbah yang ada di suatu wilayah. Dengan aplikasi ini, akan mempermudah Pemerintah dalam mengelola limbah-limbah yang ada, dan mungkin bisa sebagai solusi pengelolaan limbah yang menjadi masalah utama di Indonesia. Selain itu, dengan aplikasi ini, kita juga bisa memonitoring Pemerintahan dalam pengelolaan limbah yang ada. Di aplikasi ini juga terdapat tutorial atau tips & trik dalam mengelola sampah yang bisa dibagikan oleh pengguna aplikasi ke sesama pengguna aplikasi.</p>
                    <h5 class="text-center py-4">Dengan ini bisa membantu pemerintah mengerjakan sampah yang beserak wkwkwk awawawwawa</h5>
                    <p>Aplikasi yang akan dibuat adalah Aplikasi Runtah, yang merupakan aplikasi yang memungkinkann pengguna bekerjasama dengan pemerintah dalam guna pembersihan atau pengelolaan limbah yang ada di suatu wilayah. Dengan aplikasi ini, akan mempermudah Pemerintah dalam mengelola limbah-limbah yang ada, dan mungkin bisa sebagai solusi pengelolaan limbah yang menjadi masalah utama di Indonesia. Selain itu, dengan aplikasi ini, kita juga bisa memonitoring Pemerintahan dalam pengelolaan limbah yang ada. Di aplikasi ini juga terdapat tutorial atau tips & trik dalam mengelola sampah yang bisa dibagikan oleh pengguna aplikasi ke sesama pengguna aplikasi.</p>
                    <!-- Tags -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-20-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>About Us</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Area -->
            <div class="col-12 col-md-4">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{asset('/sites')}}/img/blog-img/3.png" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <h4>Intan Aida Rahmani</h4>

                        <p>Front-End</p>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-md-4">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{asset('/sites')}}/img/blog-img/1.png" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <h4>M. Kamil</h4>

                        <p>Back-End</p>
                    </div>
                </div>
            </div>


            <!-- Single Blog Area -->
            <div class="col-12 col-md-4">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{asset('/sites')}}/img/blog-img/2.jpg" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <h4>Tengku Sandra Alyssa</h4>

                        <p>Back-End</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->
@endsection