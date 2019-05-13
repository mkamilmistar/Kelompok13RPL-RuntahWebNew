@extends('sites.layouts.master')
@section('title')
Home - Runtah WEB
@endsection
@section('header')
<!-- Background Image -->
<div class="bg-img" style="background-image: url({{asset('sites/img/a-lucu/a2.jpg')}});">
    <div class="overlay"></div>
</div>
<!-- /Background Image -->
<!-- home wrapper -->
<div class="home-wrapper">
    <div class="container">
        <div class="row">

            <!-- home content -->
            <div class="col-md-10 col-md-offset-1">
                <div class="home-content">
                    <h2 class="white-text">Selamatkan Lingkungan Mu!</h2>
                    <p class="white-text">
                        <i>Apakah kamu siap? Buktikanlah bahwa kamu orangnya!</i>
                    </p>

                    @if(Auth::guest())
                    <a class="main-btn" href="/register">Aku berani ikut andil!</a>
                    @elseif(auth()->user()->role=='admin')
                    <a class="main-btn" href="/admins/dashboard">Admin Page</a>
                    @elseif(auth()->user()->role=='volunteer')
                    <a class="main-btn" href="/volunteer">Ikuti Event Volunteer</a>
                    @endif
                </div>
            </div>
            <!-- /home content -->

        </div>
    </div>
</div>
<!-- /home wrapper -->
<!-- /Header -->
@endsection
@section('content')
<!-- About -->
<div id="about" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Apakah kamu tahu?</h2>
            </div>
            <!-- /Section header -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-cogs"></i>
                    <h3>Fakta Pencemaran Air</h3>
                    <p>Kualitas air sungai di Indonesia pada umumnya berada pada status tercemar berat.</p>

                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-magic"></i>
                    <h3>Fakta Pencemaran Udara</h3>
                    <p>Pencemaran udara besar yang terjadi pada tahun 1952 di London telah menewaskan lebih dari
                        4.000 jiwa.</p>

                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-mobile"></i>
                    <h3>Fakta Kehutanan</h3>
                    <p>Setiap hari, diperkirakan bahwa 50-100 spesies flora dan fauna akan punah akibat dari campur tangan manusia</p>

                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-cogs"></i>
                    <h3>Fakta Perikanan</h3>
                    <p>75% perikanan dunia telah diambil dair perairan. Tidak hanya air, kemungkinan ikan juga akan punah akibat campur tangan manusia yang tidak bertanggung jawab.</p>

                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-magic"></i>
                    <h3>Fakta Pencemaran Zat Kimia</h3>
                    <p>Tidak sedikit sumber makanan modern saat ini mengandung zat kimia dan bersifat karsinogenik
                        (penyebab kanker dalam jangka waktu panjang).</p>

                </div>
            </div>
            <!-- /about -->

            <!-- about -->
            <div class="col-md-4">
                <div class="about">
                    <i class="fa fa-mobile"></i>
                    <h3>Fakta Pencemaran Lingkungan</h3>
                    <p>40.000 jiwa anak-anak meninggal dunia setiap harinya akibat gangguan kesehatan yang
                        diakibatkan oleh pecemaran lingkungan.</p>

                </div>
            </div>
            <!-- /about -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /About -->

<!-- Testimonial -->
<div id="testimonial" class="section md-padding">

    <!-- Background Image -->
    <div class="bg-img" style="background-image: url({{asset('sites/img/a-lucu/a5.jpg')}});">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Testimonial slider -->
            <div class="col-md-12 col-md-offset-1">
                <div id="testimonial-slider" class="owl-carousel owl-theme">

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <img src="{{asset('sites/img/perso1.jpg')}}" alt="">
                            <h3 class="white-text">Dhana Dhira</h3>
                            <span>Partisipan Volunteer</span>
                        </div>
                        <p class="white-text">"Kegiatan yang sangat mendidik kita untuk selalu melakukan kebaikan.
                            Sangat berguna bagi orang orang yang ingin menyalurkan bantuannya untuk menyelamatkan
                            generasi bangsa selanjutnya, yaitu dengan berbagai kegiatan membersihkan sampah dan
                            melakukan 3R."
                        </p>
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <img src="{{asset('sites/img/perso2.jpg')}}" alt="">
                            <h3 class="white-text">Muhammad Hilmy Haidar</h3>
                            <span>CEO Runtah Web</span>
                        </div>
                        <p class="white-text">"Runtah Web menghadirkan berbagai fitur yang lengkap dan kegiatan
                            sosial yang dapat menjadi penggerak dalam menyelamatkan dunia. Maka dari itu seluruh
                            masyarakat
                            dapat mengikuti kegiatan ini, terkhusus kaum muda yang menjadi generasi penerus bangsa
                            ini."
                        </p>
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <img src="{{asset('sites/img/perso1.jpg')}}" alt="">
                            <h3 class="white-text">Anisa Nurjanah</h3>
                            <span>Partisipan Volunteer</span>
                        </div>
                        <p class="white-text">"Kegiatan yang sangat mendidik kita untuk selalu melakukan kebaikan.
                            Sangat berguna bagi orang orang yang ingin menyalurkan bantuannya untuk menyelamatkan
                            generasi bangsa selanjutnya, yaitu dengan berbagai kegiatan membersihkan sampah dan
                            melakukan 3R."
                        </p>
                    </div>
                    <!-- /testimonial -->

                    <!-- testimonial -->
                    <div class="testimonial">
                        <div class="testimonial-meta">
                            <img src="{{asset('sites/img/perso2.jpg')}}" alt="">
                            <h3 class="white-text">Fauzi Muhammad Sulaeman</h3>
                            <span>Partisipan Volunteer</span>
                        </div>
                        <p class="white-text">"Runtah Web menghadirkan berbagai fitur yang lengkap dan kegiatan
                            sosial yang dapat menjadi penggerak dalam menyelamatkan dunia. Maka dari itu seluruh
                            masyarakat
                            dapat mengikuti kegiatan ini, terkhusus kaum muda yang menjadi generasi penerus bangsa
                            ini."
                        </p>
                    </div>
                    <!-- /testimonial -->

                </div>
            </div>
            <!-- /Testimonial slider -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Testimonial -->

<!-- Blog -->
<div id="blog" class="section md-padding bg-grey">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Berita Lingkungan</h2>
            </div>
            <!-- /Section header -->

            <!-- blog -->
            @foreach($posts as $post)
            <div class="col-md-4">
                <div class="blog">
                    <div class="blog-img">
                        <img class="img-responsive" src="{{asset('images/post/'.$post->image)}}" alt="">
                    </div>
                    <div class="blog-content">
                        <ul class="blog-meta">
                            <li><i class="fa fa-user"></i>{{App\User::find($post->post_id)->username}}</li>
                            <li><i class="fa fa-clock-o"></i>{{$post->created_at->format('d, M Y')}}</li>
                        </ul>
                        <h3>{{$post->title}}</h3>
                        <p>{!!$post->content!!}</p>
                        <a href="/diy">Read more</a>
                    </div>
                </div>
            </div>
            <!-- /blog -->
            @endforeach

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Blog -->

<!-- Numbers -->
<div id="numbers" class="section sm-padding">

    <!-- Background Image -->
    <div class="bg-img" style="background-image: url({{asset('sites/img/a-lucu/a3.jpg')}});">
        <div class="overlay"></div>
    </div>
    <!-- /Background Image -->

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- number -->
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-users"></i>
                    <h3 class="white-text"><span class="counter">{{$users->count()}}</span></h3>
                    <span class="white-text">Volunteer yang telah mendaftar</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-trophy"></i>
                    <h3 class="white-text"><span class="counter">{{$point->count()}}</span></h3>
                    <span class="white-text">Yang telah mendapat reward</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-file"></i>
                    <h3 class="white-text"><span class="counter">{{$event->count()}}</span> Event</h3>
                    <span class="white-text">Event found</span>
                </div>
            </div>
            <!-- /number -->

            <!-- number -->
            <div class="col-sm-3 col-xs-6">
                <div class="number">
                    <i class="fa fa-file"></i>
                    <h3 class="white-text"><span class="counter">{{$join->count()}}</span></h3>
                    <span class="white-text">Volunteer yang telah menyelesaikan event</span>
                </div>
            </div>
            <!-- /number -->

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Numbers -->

<!-- Portfolio -->
<div id="portfolio" class="section md-padding bg-white">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Event Terdekat</h2>
            </div>
            <!-- /Section header -->

            <!-- Work -->
            @foreach($events as $event)
            <div class="col-md-4 col-xs-6 work">
                <img class="img-responsive" src="{{asset('images/event/'.$event->image)}}" alt="">
                <div class="overlay"></div>
                <div class="work-content">
                    <span>{{$event->nama_event}}</span>
                    <h3>{{$event->location}}</h3>
                    <div class="work-link">
                        <a href="event/{{$event->id}}"><i class="fa fa-external-link"></i></a>
                        <a class="lightbox" href="{{asset('images/event/'.$event->image)}}"><i class="fa fa-search"></i></a>
                    </div>
                </div>
            </div>
            <!-- /Work -->
            @endforeach

        </div>
        <!-- /Row -->

    </div>
    <!-- /Container -->

</div>
<!-- /Portfolio -->
@endsection