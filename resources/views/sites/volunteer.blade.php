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
                    <h2 class="white-text">Yuk, jadi bagian dari penyelamat dunia!</h2>
                    <p class="white-text">
                        <i>Volunteer Runtah solusinya!</i>
                    </p>
                </div>
            </div>
            <!-- /home content -->

        </div>
    </div>
</div>
<!-- /home wrapper -->
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
                <h2 class="title">Jadwal Volunteer Provinsi Jawa Barat</h2>
            </div>
            <!-- /Section header -->
            <!-- box -->
            <main id="main" class="col-md-12">
                <div class="col-12 col-lg-12">
                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Kabupaten</th>
                                    <th>Kecamatan</th>
                                    <th>Hari/Tanggal</th>
                                    <th>Jam</th>
                                    <th>Lokasi</th>
                                    <th>Action</th>

                                </tr>
                            </thead>
                            <tbody>
                                @foreach($events as $info)
                                <tr>
                                    <td>{{$info->kabupaten}}</td>
                                    <td>{{$info->kecamatan}}</td>
                                    <td>{{$info->date}}</td>
                                    <td>{{$info->time}}</td>
                                    <td>{{$info->location}}</td>
                                    @if($info->status=="Tersedia")
                                    <td><a href="#" class="main-btn join" event-id="{{$info->id}}">Join Event</a></td>
                                    @else
                                    <td>Event Belum Tersedia</td>
                                    @endif
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        <div class="blog-details-content section-padding-100">
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </main>
        </div>
    </div>
</div>
</div>


@section('script')

<script src="{{asset('admin/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
<script>
    $('.join').click(function() {
        var event_id = $(this).attr('event-id');
        swal({
                title: "Yakin?",
                text: "Apakah anda yakin ingin mengikuti event ini?",
                icon: "info",
                buttons: true,
                dangerMode: false,
            })
            .then((willJoin) => {
                console.log(willJoin);
                if (willJoin) {
                    window.location = "/volunteer/" + event_id + "/join";
                } else {

                }
            });
    });
</script>
<script>
    @if(Session::has('point'))
    swal({
        title: "Good job!",
        text: "Kamu mendapat tambahan 5 point! Kumpulkan terus pointmu untuk mendapatkan reward!",
        icon: "success",
        button: "Baiklah!",
    });
    @endif
</script>
@endsection


@endsection