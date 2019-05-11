@extends('sites.layouts.master')
@section('title')
Volunteer - Runtah WEB
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

            <!-- Section header -->
            <div class="section-header text-center">
                <h2 class="title">Anda Berhasil Mengikuti Event!</h2>
            </div>
            <!-- /Section header -->
            <!-- box -->
            Kalo udah kelar, konfirmasi dengan menekan tombol dibawah ini
            <br>


            <div class="box-body">
                <table id="example1" style="text-align:center;" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td><b>Event Yang Diikuti</b></td>
                            <td><b>Status</b></td>
                            <td><b>Action</b></td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($joins as $join)
                        @if($join->status=="Belum Selesai")
                        <tr>
                            <td>{{$join->event->location}}</td>
                            <td>{{$join->status}}</td>

                            <td>
                                <a href="#" class="btn btn-primary join" join-id="{{$join->id}}">Event Selesai</a>
                                <a href="#" type="button" class="btn btn-danger delete" event-id="{{$join->id}}">Batalkan</a>
                            </td>
                        </tr>
                        @endif
                        @endforeach
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
@endsection

@endsection