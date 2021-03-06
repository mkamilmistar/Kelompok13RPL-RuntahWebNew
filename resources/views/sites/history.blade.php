@extends('sites.layouts.master')
@section('title')
History - Runtah WEB
@endsection
@section('header')
<!-- Background Image -->
<div class="bg-img" style="background-image: url({{asset('sites/img/b-volunteer/b2.jpg')}});">
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
                    <h2 class="white-text">Anda Sedang Mengikuti Event!</h2>
                    <p class="white-text">
                        <i>Ayo lakukan sekarang juga!</i>
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
<div id="service" class="section md-padding">

    <!-- Container -->
    <div class="container">

        <!-- Row -->
        <div class="row">
            <br>


            <div class="box-body">
                <table id="example1" style="text-align:center;" class="table table-bordered table-striped">
                    <thead>
                        <!-- Section header -->
                        <div class="section-header text-center">
                            <h2 class="title">Status Event yang Diikuti</h2>
                        </div>
                        <!-- /Section header -->
                        <!-- box -->
                        <tr>
                            <td><b>Event Yang Diikuti</b></td>
                            <td><b>Status</b></td>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($histories as $history)
                        @if($history->status=="Belum Selesai")
                        <tr>
                            <td>{{$history->event->location}}</td>
                            <td>{{$history->status}}</td>
                            <td>
                                <a href="#" class="btn btn-primary join" join-id="{{$history->id}}">Event Selesai</a>
                                <a href="#" type="button" class="btn btn-danger delete cancel" join-id="{{$history->id}}">Batalkan</a>
                            </td>
                        </tr>
                        @endif
                        @empty

                        @endforelse



                    </tbody>

                </table>

                <br>
                <br>

            </div>
            <div class="box-body">
                <table id="example1" style="text-align:center;" class="table table-bordered table-striped">
                    <!-- Section header -->
                    <div class="section-header text-center">
                        <h3 class="title">Event yang Telah Diikuti</h3>
                    </div>
                    <!-- /Section header -->
                    <!-- box -->
                    <thead>
                        <tr>
                            <td><b>Event Yang Diikuti</b></td>
                            <td><b>Status</b></td>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse($histories as $history)
                        @if($history->status=="Selesai")
                        <tr>
                            <td>{{$history->event->location}}</td>
                            <td><a>{{$history->status}}</a></td>
                        </tr>
                        @else
                        @endif
                        @empty
                        <tr>
                            <td colspan="3"><b>Belum Ada Event Yang Telah Diikuti</b></td>
                        </tr>
                        @endforelse
                    </tbody>

                </table>
            </div>


        </div>
        <!-- /.box -->
    </div>
</div>

@section('script')
<script>
    $('.join').click(function() {
        var join_id = $(this).attr('join-id');
        swal({
                title: "Yakin?",
                text: "Apakah anda yakin telah menyelesaikan event tersebut?",
                icon: "info",
                buttons: true,
                dangerMode: false,
            })
            .then((willJoin) => {
                console.log(willJoin);
                if (willJoin) {
                    window.location = "/volunteer/" + join_id + "/confirm";
                } else {

                }
            });
    });
</script>
<script>
    $('.cancel').click(function() {
        var join_id = $(this).attr('join-id');
        swal({
                title: "Yakin?",
                text: "Apakah anda yakin ingin membatalkan event ini?",
                icon: "warning",
                buttons: true,
                dangerMode: false,
            })
            .then((willCancel) => {
                console.log(willCancel);
                if (willCancel) {
                    window.location = "/volunteer/" + join_id + "/cancel";
                } else {

                }
            });
    });
</script>
@endsection

@endsection