@extends('sites.layouts.master')
@section('content')
<div class="container">
    <form action="{{ route('post.publish') }}" class="class" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" placeholder="Post Title">
        </div>

        <div class="form-group">
            <label for="">Content</label>
            <textarea class="form-control" name="content" rows="5" placeholder="Post Title"> </textarea>
        </div>

        <div class="form-group">
            <input type="submit" value="Save" class="btn btn-primary">
        </div>
    </form>

</div>
@endsection