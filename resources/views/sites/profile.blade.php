@extends('sites.layouts.master')
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
                            <div class="col-md-3 mt-4">
                                <img src="{{asset($users->user_image)}}" class="img-circle" alt="Avatar">
                                <h3 class="name"></h3>
                            </div>
                        </div>
                    </div>
                    <div class="profile-stat">
                        <div class="row justify-content-center">
                            <div class="row justify-content-center">
                                {{$users->poin }} <span> Points</span>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-12">
                        <div class="contact--info mt-50 mb-100">
                            <h4>Basic Info</h4>
                            <ul class="contact-list">
                                @if ( !empty ( $users->jenis_kelamin ) )
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Gender</h6>
                                    <h6>{{$users->jenis_kelamin}}</h6>
                                </li>
                                @else
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Gender</h6>
                                    <h6>-</h6>
                                </li>
                                @endif

                                @if ( !empty ( $users->nomor_telepon ) )
                                <li>
                                    <h6><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h6>
                                    <h6>{{$users -> nomor_telepon}}</h6>
                                </li>
                                @else
                                <li>
                                    <h6><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h6>
                                    <h6>-</h6>
                                </li>
                                @endif

                                @if ( !empty ( $users->email ) )
                                <li>
                                    <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                                    <h6>{{$users->email}}</h6>
                                </li>
                                @else
                                <li>
                                    <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                                    <h6>-</h6>
                                </li>
                                @endif

                                @if ( !empty ( $users->alamat ) )
                                <li>
                                    <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                                    <h6>{{$volunteer->alamat}}</h6>
                                </li>
                                @else
                                <li>
                                    <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                                    <h6>-</h6>
                                </li>
                                @endif

                                @if ( !empty ( $users->nik_pengguna ) )
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> NIK Pengguna</h6>
                                    <h6>{{$users->nik_pengguna}}</h6>
                                </li>
                                @else
                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> NIK Penguna</h6>
                                    <h6>-</h6>
                                </li>
                                @endif
                            </ul>
                            <div class="row justify-content-center">
                                <a href="#" class="btn clever-btn">Edit Profile</a>
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