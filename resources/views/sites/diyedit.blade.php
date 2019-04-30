@extends('sites.layouts.master')
@section('content')
<div class="container">
    <form action="/diy/{{$posts->id}}/update" class="class" method="post">
        {{csrf_field()}}

        <h3>Edit Post</h3>
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Post Title" value="{{$posts->title}}">
        </div>

        <div class="form-group">
            <label for="">Content</label>
            <textarea class="form-control" name="content" rows="5" placeholder="Post Title">{{$posts->content}}</textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>

</div>
@endsection