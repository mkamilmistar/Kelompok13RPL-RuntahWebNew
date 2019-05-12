@extends('admin.layouts.master')
@section('judulbesar')
Postingan DIY
@endsection
@section('title')
Postingan Do It Yourself! Admin
@endsection
@section('content')

<!-- Main content -->
<section class="content">
    <!-- /.content -->
    <div class="row">
        <div class="col-md-12">
            <div class="box box-solid">
                <div class="box-header with-border">
                    <h3 class="box-title">Post</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <div class="box-group" id="accordion">
                        <form action="{{ route('post.publish') }}" class="class" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" id="title" class="form-control" name="title" placeholder="Post Title">
                            </div>
                            <div class="form-group">
                                <label for="image">Foto Postingan</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" name="content" id="content" rows="5" placeholder="Post Content"> </textarea>
                            </div>
                            <div class="form-group">
                                <label for="link">Link Video</label>
                                <input type="text" id="link" class="form-control" name="linkvideo" placeholder="Post video">
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Publish" class="btn btn-primary">
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
</section>

@endsection
@section('script')
<script>
    @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", "Berhasil!")
    @endif
</script>
@endsection
@section('js')
<script>
    CKEDITOR.replace('content');
</script>
@endsection