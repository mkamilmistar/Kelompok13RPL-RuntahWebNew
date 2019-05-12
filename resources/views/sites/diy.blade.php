@extends('sites.layouts.master')
@section('title')
Do It Yourself! - Runtah WEB
@endsection

@section('header')
<!-- Background Image -->
<div class="bg-img" style="background-image: url({{asset('sites/img/d-diy/d1.jpg')}});">
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
                    <h2 class="white-text">Do It Yourself!</h2>
                    <p class="white-text">
                        <i>Punya barang bekas? Jangan dibuang! Ikuti kami, jangan pergi dari laman ini.</i>
                    </p>
                    <button class="main-btn">Aku bisa!</button>

                </div>
            </div>
            <!-- /home content -->

        </div>
    </div>
</div>
<!-- /home wrapper -->
@endsection
<!-- ##### Catagory Area End ##### -->
@section('content')
<!-- ##### Blog Details Content ##### -->
<!-- Blog -->
<div id="service" class="section md-padding">
    <!-- Container -->
    <div class="container">
        <!-- Row -->
        <div class="row">
            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Apa sih untungnya jika kita melakukan diy barang bekas?</h2>
            </div>
            <!-- /Section header -->

            <!-- Blog Details Text -->
            @foreach($posts as $post)
            <div class="page-content content">
                <div class="form-group">
                    <label for="">
                        <h3> {{$post->title}}</h3>
                    </label>
                </div>
                <div class="form-group">
                    <label for="">

                    </label>
                </div>
                <div class="form-group">
                    <label for="">
                        <p>{!!$post->content!!}
                    </label>
                </div>
                @if(Auth::guest())
                @elseif(auth()->user()->role=='admin')
                <a href="/admins/diypost/{{$post->id}}/edit" class="main-btn">Edit</a>
                <a href="/admins/diypost/{{$post->id}}/delete" class="main-btn">Delete</a>
                @endif
            </div>
            @endforeach
            @if(Auth::guest())
            <div class="form-group">
                <div class="row justify-content-center">

                </div>
            </div>
            @elseif(auth()->user()->role=='admin')
            <div class="form-group">
                <div class="section-header text-center">
                    <a href="/admins/diypost/create" class="main-btn">Make a post here!</a>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>


@endsection