@extends('sites.layouts.master')
@section('content')
<!-- ##### Catagory Area Start ##### -->
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/blog-img/7.jpg);">
    <div class="blog-details-headline">
        <h3>Do It Yourself</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Volunteer &amp; Non-Profit</a>
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
                @foreach($posts as $post)
                <div class="blog-details-text">
                    <b> {{$post->title}}</b>
                    <p>{{$post->content}}</p>
                </div>
                @endforeach
                @if(auth()->user()->role=='volunteer')
                <a href="/diy/create">
                    <h3>Make a post here!</h3>
                </a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection