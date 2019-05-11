@extends('sites.layouts.master')
@section('title')
My Profile - Runtah WEB
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
<!-- Service -->
<!-- Container -->
<div class="container">
    <!-- Row -->
    <!-- Section header -->
    <div class="page-content content">
        <div class="section-header text-center">
            <h2 class="title">{{$users->username}}'s Profile</h2>
            About me
        </div>
        <div class="contact--info inner ">
            <div class="row justify-content-center">
                <img src="{{asset('images/'.$users->user_image)}}" class="img-circle" style="width:300px;height:300px;object-fit: cover;border-radius:8px" alt="Avatar">
            </div>
            <div class="profile-stat">
                <div class="row justify-content-center">
                    <div class="row justify-content-center">
                        @if($users->point==0)
                        <span> Belum Ada Points</span>
                        @else
                        <span> {{$users->point }} Points</span>
                        @endif
                    </div>
                </div>
                <div class="row justify-content-center">
                    @if($users->point==500)
                    <a href="/volunteer/claimreward" class="main-btn">Claim Reward</a>
                    @else
                    <a href="#" class="main-btn">Point Belum Cukup</a>
                    @endif
                </div>
                <br>
            </div>
            <!-- Contact Info -->
            <div id="main" class="col-md-12">
                <div class="col-12 col-lg-12">
                    <h4>Basic Info</h4>
                    <ul class="contact-list">
                        @if ( !empty ( $users->nama_depan ) )
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i> Nama Depan</h6>
                            <h6>{{$users->nama_depan}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Nama Depan</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @if ( !empty ( $users->nama_belakang ) )
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Nama Belakang</h6>
                            <h6>{{$users->nama_belakang}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Nama Belakang</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @if ( !empty ( $users->jenis_kelamin ) )
                        <li>
                            <h6><i class="fa fa-intersex" aria-hidden="true"></i>Gender</h6>
                            <h6>{{$users->jenis_kelamin}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-intersex" aria-hidden="true"></i>Gender</h6>
                            <h6>-</h6>
                        </li>
                        @endif

                        @if ( !empty ( $users->nomor_telepon ) )
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>Phone</h6>
                            <h6>{{$users -> nomor_telepon}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>Phone</h6>
                            <h6>-</h6>
                        </li>
                        @endif

                        @if ( !empty ( $users->email ) )
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>Email</h6>
                            <h6>{{$users->email}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>Email</h6>
                            <h6>-</h6>
                        </li>
                        @endif

                        @if ( !empty ( $users->alamat ) )
                        <li>
                            <h6><i class="fa fa-home" aria-hidden="true"></i>Address</h6>
                            <h6>{{$users->alamat}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-home" aria-hidden="true"></i>Address</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @if(auth()->user()->role=='admin')
                        <label for=""></label>
                        @else(auth()->user()->role=='volunteer')
                        @if ( !empty ( $users->nik_pengguna ) )
                        <li>
                            <h6><i class="fa fa-square" aria-hidden="true"></i>NIK Pengguna</h6>
                            <h6>{{$users->nik_pengguna}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-square" aria-hidden="true"></i>NIK Penguna</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @endif
                    </ul>
                    <div class="row justify-content-center">
                        <a href="{{url("/profile/{$users->id}/edit")}}" class="main-btn ">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- END PROFILE HEADER -->
    </div>
</div>
</div>
<!-- ##### Regular Page Area End ##### -->
@stop