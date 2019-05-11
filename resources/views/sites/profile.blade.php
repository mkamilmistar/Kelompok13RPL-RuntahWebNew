@extends('sites.layouts.master')
@section('title')
My Profile - Runtah WEB
@endsection
@section('content')
<!-- ##### Regular Page Area Start ##### -->
<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="page-content">
                    <h4>{{$users->username}}'s Profile</h4>
                    <div class="row justify-content-center">
                        <p>About me</p>
                    </div>
                    <!-- PROFILE HEADER -->
                    <div class="profile-main">
                        <div class="row justify-content-center">
                            <img src="{{asset('images/'.$users->user_image)}}" class="img-circle" style="width:300px;height:300px;object-fit: cover;border-radius:8px" alt="Avatar">
                        </div>
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
                            <a href="/volunteer/claimreward" class="btn btn-primary">Claim Reward</a>
                            @else
                            <a href="#" class="btn btn-secondary">Point Belum Cukup</a>
                            @endif
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-12">
                        <div class="contact--info mt-50 mb-100">
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
                            </ul>
                            <div class="row justify-content-center">
                                <a href="{{url("/profile/{$users->id}/edit")}}" class="btn clever-btn">Edit Profile</a>
                            </div>
                        </div>
                    </div>


                    <!-- END PROFILE HEADER -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ##### Regular Page Area End ##### -->
@stop