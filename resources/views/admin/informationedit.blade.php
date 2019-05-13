@extends('admin.layouts.master')
@section('title')
Edit Informasi
@endsection
@section('judulbesar')
Data Informasi
@endsection
@section('judulkecil')
Edit
@endsection
@section('content')

<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">Edit Data Volunteer</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/admins/information/{{$wilayah->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input name="kabupaten" value="{{$wilayah->kabupaten}}" type="kabupaten" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kabupaten">
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input name="kecamatan" value="{{$wilayah->kecamatan}}" type="kecamatan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kecamatan">
                                </div>
                                <div class="form-group">
                                    <label for="date">Hari/Tanggal</label>
                                    <input name="date" value="{{$wilayah->date}}" type="date" class="form-control" id="date" aria-describedby="emailHelp" placeholder="Hari/Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="datetime">Jam</label>
                                    <input name="time" value="{{$wilayah->time}}" type="time" class="form-control" id="datetime" aria-describedby="emailHelp" placeholder="Jam">
                                </div>

                                <button type="submit" class="btn btn-warning">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection