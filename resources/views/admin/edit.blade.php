@extends('admin.layouts.master')
@section('title')
Edit
@endsection
@section('judulbesar')
Data Edit
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
                            <form action="/admins/{{$users->id}}/update" method="POST" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="nama_epan">Nama Depan</label>
                                    <input required name="nama_depan" value="{{$users->nama_depan}}" type="text" class="form-control" id="nama_depan" aria-describedby="emailHelp" placeholder="Nama Depan">
                                </div>
                                <div class="form-group">
                                    <label for="nama_belakang">Nama Belakang</label>
                                    <input required name="nama_belakang" value="{{$users->nama_belakang}}" type="text" class="form-control" id="nama_belakang" aria-describedby="emailHelp" placeholder="Nama belakang">
                                </div>
                                <div class="form-group">
                                    <label for="gender">Jenis Kelamin</label>
                                    <select required name="jenis_kelamin" class="form-control" id="gender">
                                        <option value="Laki-laki" @if($users -> jenis_kelamin =="Laki-laki") selected @endif >Laki-laki</option>
                                        <option value="Perempuan" @if($users -> jenis_kelamin =="Perempuan") selected @endif >Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="no_hp">Nomor Telepon</label>
                                    <input required name="nomor_telepon" maxlength="12" minlength="10" value="{{$users->nomor_telepon}}" type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" minlength="10" maxlength="12" title="Ten digits code" class="form-control" id="no_hp" aria-describedby="emailHelp" placeholder="Nomor Telepon">
                                </div>
                                <div class="form-group">
                                    <label for="alamat">Alamat</label>
                                    <textarea required name="alamat" class="form-control" id="alamat" rows="3">{{$users->alamat}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input required name="email" value="{{$users->email}}" type="text" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Alamat">
                                </div>
                                <div class="form-group">
                                    <label for="nik">NIK</label>
                                    <input required name="nik_pengguna" value="{{$users->nik_pengguna}}" type="text" class="form-control" id="nik" aria-describedby="emailHelp" placeholder="NIK Pengguna">
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