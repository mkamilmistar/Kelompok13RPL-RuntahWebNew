@extends('sites.layouts.master')
@section('title')
Edit Profile - Runtah WEB
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
                    <h2 class="white-text">Untuk bisa bergabung, kamu harus isi identitas mu terlebih dahulu ya!
                    </h2>
                    <p class="white-text">
                        <i>Yuk diisi para calon penyelamat dunia!</i>
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

<!-- ##### Regular Page Area Start ##### -->
<div class="container">
    <!-- form mulai-->
    <form class="form-horizontal needs-validation" novalidate method="POST" action="{{ url('/profile/edit/save') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        @if(count($errors)>0)
        @foreach($errors->all() as $error)
        <div class="alert alert-dismissible alert-danger">
            {{$error}}
        </div>
        @endforeach
        @endif
        <div class="page-content content">
            <div class="section-header text-center">
                <h2 class="title">Edit Data Profile</h2>
            </div>
            <!-- PROFILE HEADER -->
            <div class="contact--info inner ">
                <div class="content">
                    <h4>{{$users->username}}'s Profile</h4>
                    <div class="inner">
                        <p>Change Photo</p>
                    </div>
                    <div class="row justify-content-center">
                        <img src="{{asset('images/'.$users->user_image)}}" class="img-circle" style="width:300px;height:300px;object-fit: cover;border-radius:8px" alt="Avatar">
                    </div>
                    <div class="inner">
                        <input type="file" name="user_image" id="img" onchange="PreviewImage();">
                    </div>
                </div>
                <!-- Contact Info -->
                <br>
                <h5>Basic Info</h5>
                <ul class="contact-list">
                    <li>
                        <h6><i class="fa fa-user" aria-hidden="true"></i><label for="nama_depan">First Name <font color="red">*</font></label></h6>
                        <h6><input type="text" class="form-control" required name="nama_depan" value="{{$users->nama_depan}}"></h6>
                    </li>
                    <li>
                        <h6><i class="fa fa-user" aria-hidden="true"></i><label for="nama_belakang">Last Name<font color="red">*</font></label></h6>
                        <h6><input type="text" class="form-control" required name="nama_belakang" value="{{$users->nama_belakang}}"></h6>
                    </li>

                    <label for=""></label>

                    <li>
                        <h6><i class="fa fa-intersex" aria-hidden="true"></i><label for="address"><label for="jenis_kelamin">Gender<font color="red">*</font>
                        </h6>
                        <h6>
                            <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-laki">Laki-Laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </h6>
                    </li>

                    <li>
                        <h6><i class="fa fa-phone" aria-hidden="true"></i><label for="nomor_telepon">Phone<font color="red">*</h6>
                        <h6><input type="tel" pattern="[0-9]{4}-[0-9]{3}-[0-9]{4}" minlength="10" maxlength="12" title="Ten digits code" placeholder="0822 8377 7098" class="form-control" required name="nomor_telepon" value="{{$users->nomor_telepon}}"></h6>
                    </li>

                    <li>
                        <h6><i class="fa fa-envelope" aria-hidden="true"></i><label for="email">Email<font color="red">*</h6>
                        <h6><input type="text" class="form-control" required name="email" value="{{$users->email}}"></h6>
                    </li>

                    <li>
                        <h6><i class="fa fa-home" aria-hidden="true"></i><label for="alamat">Address<font color="red">*</h6>
                        <h6><input type="text" class="form-control" required name="alamat" value="{{$users->alamat}}"></h6>
                    </li>
                    @if(auth()->user()->role=='admin')
                    <label for=""></label>
                    @else(auth()->user()->role=='volunteer')
                    <li>
                        <h6><i class="fa fa-square" aria-hidden="true"></i>NIK Pengguna</h6>
                        <h6><input type="text" class="form-control" required name="nik_pengguna" value="{{$users->nik_pengguna}}"></h6>
                    </li>
                    @endif
                </ul>
                <div class="form-group">
                    <div class="row justify-content-center">
                        <a href="/profile/changepassword" class="">
                            Change Password
                        </a>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <input type="submit" class="main-btn" value="SAVE">
                </div>
            </div>
        </div>
    </form>
</div>
</div>
<!-- END PROFILE HEADER -->


<!-- ##### Regular Page Area End ##### -->
@stop