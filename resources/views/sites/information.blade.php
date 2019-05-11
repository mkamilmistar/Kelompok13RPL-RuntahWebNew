@extends('sites.layouts.master')
@section('title')
Information - Runtah WEB
@endsection
@section('header')
<!-- Background Image -->
<div class="bg-img" style="background-image: url({{asset('sites/img/c-sampah/c4.jpg')}});">
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
                    <h2 class="white-text">Informasi Pengangkutan Sampah di Daerah Mu</h2>
                    <p class="white-text">
                        <i>Stop! Sampahmu sudah dibuang belum? Cek jadwal pengangkutan sampah daerahmu
                            disini!</i>
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
                <h2 class="title">Data Pengangkutan Sampah Provinsi Jawa Barat</h2>
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($information as $info)
                                <tr>
                                    <td>{{$info->kabupaten}}</td>
                                    <td>{{$info->kecamatan}}</td>
                                    <td>{{$info->date}}</td>
                                    <td>{{$info->time}}</td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </main>
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
@endsection
@endsection