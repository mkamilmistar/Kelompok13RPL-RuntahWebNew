@extends('sites.layouts.master')
@section('title')
Volunteer - Runtah WEB
@endsection
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/bg-img/bg0.jpg);">
    <div class="blog-details-headline">
        <h3>Ayo Mulai Volunteer</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Volunteer &amp; Non-Profit</a>
        </div>
    </div>
</div>
<div class="blog-details-content section-padding-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="box">
                    <div class="box-header">
                        <br>
                        <h3 class="box-title">Data Event Volunteer Provinsi Jawa Barat</h3>
                        <br>
                    </div>
                    <!-- box -->
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
                                    <td><a href="#" class="btn clever-btn join" event-id="{{$info->id}}">Join Event</a></td>
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