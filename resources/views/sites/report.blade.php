@extends('sites.layouts.master')
@section('title')
Report - Runtah WEB
@endsection
@section('header')
<!-- Background Image -->
<div class="bg-img" style="background-image: url({{asset('sites/img/b-volunteer/b1.jpg')}});">
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
                    <h2 class="white-text">Laporkan sebelum terjadi pencemaran berlanjut!</h2>
                    <p class="white-text">
                        <i>Sudahkah kamu peka terhadap lingkungan mu sendiri?</i>
                    </p>
                </div>
            </div>
            <!-- /home content -->

        </div>
    </div>
</div>
<!-- /home wrapper -->
@endsection
@section('content')
<!-- Service -->
<div id="service" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Laporkan daerah yang terkena pencemaran!</h2>
                <!-- ##### Blog Details Content ##### -->
                <div class="blog-details-content section-padding-100">
                    <div class="container">
                        <div class="row justify-content-center">
                            <form action="{{ route('postreport') }}" class="class" method="post">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="">Report</label>
                                    <textarea class="form-control" name="report" rows="5" placeholder="Post report"> </textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" value="Publish" class="btn btn-primary">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@section('script')
<script>
    @if(Session::has('sukses'))
    toastr.success("{{Session::get('sukses')}}", "Berhasil!")
    @endif
</script>

@endsection
@endsection