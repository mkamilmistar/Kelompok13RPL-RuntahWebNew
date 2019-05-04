@extends('sites.layouts.master')
@section('title')
Home - Runtah WEB
@endsection
@section('content')
<!-- ##### Hero Area Start ##### -->
<section class="hero-area bg-img bg-overlay-2by5" style="background-image: url({{asset('/sites')}}/img/bg-img/bg0.jpg);">
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <div class="col-12">
                <!-- Hero Content -->
                <div class="hero-content text-center">
                    <h2>Selamatkan Lingkungan Mu!</h2>
                    <a href="#" class="btn clever-btn">Aku Mau Ikut Andil !</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Hero Area End ##### -->

</section>
<!-- ##### Register Now End ##### -->

<!-- ##### Upcoming Events Start ##### -->
<section class="upcoming-events section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Event terdekat</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="250ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{asset('/sites')}}/img/bg-img/e1.jpg" alt="">
                        <h6 class="event-date">August 26</h6>
                        <h4 class="event-title">Sampah Ciliwung</h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> August 26 @ 9:00 am</p>
                        </div>
                        <div class="events-fee">
                            <a href="#">Free</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="500ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{asset('/sites')}}/img/bg-img/e2.jpg" alt="">
                        <h6 class="event-date">August 7</h6>
                        <h4 class="event-title">Sampah Rumah Kucing</h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> August 7 @ 9:00 am</p>
                        </div>
                        <div class="events-fee">
                            <a href="#" class="free">Free</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Single Upcoming Events -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="single-upcoming-events mb-50 wow fadeInUp" data-wow-delay="750ms">
                    <!-- Events Thumb -->
                    <div class="events-thumb">
                        <img src="{{asset('/sites')}}/img/bg-img/e3.jpg" alt="">
                        <h6 class="event-date">August 3</h6>
                        <h4 class="event-title">Kucing Kawin</h4>
                    </div>
                    <!-- Date & Fee -->
                    <div class="date-fee d-flex justify-content-between">
                        <div class="date">
                            <p><i class="fa fa-clock"></i> August 3 @ 9:00 am</p>
                        </div>
                        <div class="events-fee">
                            <a href="#">Free</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Upcoming Events End ##### -->

<!-- ##### Blog Area Start ##### -->
<section class="blog-area section-padding-100-0">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-heading">
                    <h3>Dari Kami</h3>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Single Blog Area -->
            <div class="col-12 col-md-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="250ms">
                    <img src="{{asset('/sites')}}/img/blog-img/bg1.jpg" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="blog-headline">
                            <h4>Tutorial Makan Sampah</h4>
                        </a>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Yayak</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">Intan &amp; emil</a>
                        </div>
                        <p>Kalau mau makan sampah, makan aja, paling gila</p>
                    </div>
                </div>
            </div>

            <!-- Single Blog Area -->
            <div class="col-12 col-md-6">
                <div class="single-blog-area mb-100 wow fadeInUp" data-wow-delay="500ms">
                    <img src="{{asset('/sites')}}/img/blog-img/bg1.jpg" alt="">
                    <!-- Blog Content -->
                    <div class="blog-content">
                        <a href="#" class="blog-headline">
                            <h4>Tutorial Kucing Kawin</h4>
                        </a>
                        <div class="meta d-flex align-items-center">
                            <a href="#">Intan</a>
                            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
                            <a href="#">yayak &amp; emil</a>
                        </div>
                        <p>Kau tengok aja surang</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ##### Blog Area End ##### -->
@endsection