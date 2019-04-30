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
                    <div class="form-group">
                        <label for=""><b> {{$post->title}}</b></label>
                    </div>
                    <div class="form-group">
                        <label for="">
                            <p>{{$post->content}}</p>
                        </label>
                    </div>
                    @if(Auth::guest())
                    @elseif(auth()->user()->role=='volunteer')
                    <a href="/diy/{{$post->id}}/edit" class="btn clever-btn">Edit</a>
                    <a href="/diy/{{$post->id}}/delete" class="btn clever-btn">Delete</a>
                    @endif
                </div>
                @endforeach
                @if(Auth::guest())
                <div class="form-group">
                    <div class="row justify-content-center">
                        <a href="#" class="btn clever-btn">REPORT!</a>
                    </div>
                </div>
                @elseif(auth()->user()->role=='volunteer')
                <div class="form-group">
                    <div class="row justify-content-center">
                        <a href="/diy/create" class="btn clever-btn">Make a post here!</a>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection