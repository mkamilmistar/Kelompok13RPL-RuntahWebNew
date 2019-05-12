@extends('admin.layouts.master')
@section('judulbesar')
Postingan DIY
@endsection
@section('title')
Postingan Do It Yourself! Admin
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
                    <form action="/admins/diypost/{{$posts->id}}/update" class="class" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="">Title</label>
                            <input required type="text" value="{{$posts->title}}" class="form-control" name="title" placeholder="Post Title">
                        </div>
                        <div class="form-group">
                            <label for="image">Foto Postingan</label>
                            <img src="{{asset('images/post/'.$posts->image)}}" class="img-circle" style="width:200px;height:200px;object-fit: cover;border-radius:8px" alt="image">
                            <input type="file" name="image" id="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Content</label>
                            <textarea required class="form-control" name="content" rows="5" placeholder="Post Title">{!!$posts->content!!}</textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Save" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->

    </div>
    <!-- /.row -->
    <!-- END ACCORDION & CAROUSEL-->
    @endsection

    @section('js')
    <script>
        CKEDITOR.replace('content');
    </script>
    @endsection