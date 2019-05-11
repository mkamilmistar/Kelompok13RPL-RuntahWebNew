@extends('admin.layouts.master')
@section('title')
Edit Event
@endsection
@section('judulbesar')
Data Event
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
                            <h3 class="panel-title">Edit Data Event</h3>
                        </div>
                        <div class="panel-body">
                            <form action="/admins/event/{{$events->id}}/update" class="form-horizontal needs-validation" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="nama_event">Nama Event</label>
                                    <input name="nama_event" value="{{$events->nama_event}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Event">
                                </div>
                                <div class="form-group">
                                    <label for="kabupaten">Kabupaten</label>
                                    <input name="kabupaten" value="{{$events->kabupaten}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kabupaten">
                                </div>
                                <div class="form-group">
                                    <label for="kecamatan">Kecamatan</label>
                                    <input name="kecamatan" value="{{$events->kecamatan}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="kecamatan">
                                </div>
                                <div class="form-group">
                                    <label for="date">Hari/Tanggal</label>
                                    <input name="date" value="{{$events->date}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hari/Tanggal">
                                </div>
                                <div class="form-group">
                                    <label for="time">Jam</label>
                                    <input name="time" value="{{$events->time}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jam">
                                </div>
                                <div class="form-group">
                                    <label for="location">Lokasi</label>
                                    <input name="location" value="{{$events->location}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Lokasi">
                                </div>
                                <div class="form-group">
                                    <label for="text">Photo Event</label>
                                    <br>
                                    <img src="{{asset('images/'.$events->image)}}" class="img-circle" style="width:300px;height:300px;object-fit: cover;border-radius:8px" alt="event_image">
                                    <input type="file" name="image" id="img" onchange="PreviewImage();">
                                </div>
                                <div class="form-group">
                                    <label for="Select">Status</label>
                                    <select name="status" class="form-control" id="exampleFormControlSelect1">
                                        <option value="Tersedia" @if($events -> status =="Tersedia") selected @endif >Tersedia</option>
                                        <option value="Tidak Tersedia" @if($events -> status =="Tidak Tersedia") selected @endif >Tidak Tersedia</option>
                                    </select>
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