@extends('admin.layouts.master')
@section('judulbesar')
Postingan DIY
@endsection
@section('title')
Postingan Do It Yourself!
@endsection
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="box box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">Post</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="box-group" id="accordion">
                    @foreach($posts as $post)
                    <!-- we are adding the .panel class so bootstrap.js collapse plugin detects it -->
                    <div class="panel box box-primary">
                        <div class="box-header with-border">
                            <h4 class="box-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    {{$post->title}}
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body">
                                {!!$post->content!!}
                            </div>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in">
                            <div class="box-body">
                                <div class="col-md-6">
                                    <a href="/admins/diypost/{{$post->id}}/edit" class="btn btn-block btn-warning">Edit</a>
                                    <a href="/admins/diypost/{{$post->id}}/delete" class="btn btn-block btn-danger">Delete</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

        <div class="col-md-4">
            <a href="/admins/diypost/create" class="btn btn-block btn-primary">Create Post</a>
        </div>
    </div>
    <!-- /.row -->
    <!-- END ACCORDION & CAROUSEL-->


    @endsection