@extends('sites.layouts.master')
@section('title')
Information - Runtah WEB
@endsection
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/blog-img/7.jpg);">
    <div class="blog-details-headline">
        <h3>Tabel Data Informasi Sampah</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Volunteer &amp; Non-Profit</a>
        </div>
    </div>
</div>
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">


                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Data Pengangkatan Sampah Kabupaten Bogor</h3>

                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <td><b>Kecamatan</b></td>
                                    <td><b>Hari/Tanggal</b></td>
                                    <td><b>Jam</b></td>


                                </tr>
                            </thead>
                            @foreach($information as $info)
                            <tbody>
                                <tr>
                                    <td>{{$info -> kecamatan}}</td>
                                    <td>{{$info -> date}}</td>
                                    <td>{{$info -> time}}</td>

                                </tr>
                            </tbody>
                            @endforeach

                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->

            </div>
        </div>
    </div>
</div>

@endsection