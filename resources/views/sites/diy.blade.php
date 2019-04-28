@extends('sites.layouts.master')
@section('content')
<h1>kucing</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            @foreach($posts as $post)
            <div class="panel-heading">{{$post->title}}</div>
            <div class="pane;-body">
                <p>{{$post->content}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection