@extends('sites.layouts.master')
@section('content')
<!-- ##### Regular Page Area Start ##### -->
<div class="regular-page-area section-padding-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="page-content">
                    <h4>PROFILE NAME</h4>
                    <p>Sed elementum lacus a risus luctus suscipit. Aenean sollicitudin sapien neque, in fermentum lorem dignissim a. Nullam eu mattis quam. Donec porttitor nunc a diam molestie blandit. Maecenas quis ultrices ex. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nullam eget vehicula lorem, vitae porta nisi. Ut vel quam erat. Ut vitae erat tincidunt, tristique mi ac, pharetra dolor. In et suscipit ex. Pellentesque aliquet velit tortor, eget placerat mi scelerisque a. Aliquam eu dui efficitur purus posuere viverra. Proin ut elit mollis, euismod diam et, fermentum enim.</p>
                    <!-- PROFILE HEADER -->
                    <div class="profile-main">
                        <img src="assets/img/user-medium.png" class="img-circle" alt="Avatar">
                        <h3 class="name"></h3>
                        <span class="online-status status-available">Available</span>
                    </div>
                    <div class="profile-stat">
                        <div class="row">
                            <div class="col-md-4 stat-item">
                                45 <span>Projects</span>
                            </div>
                            <div class="col-md-4 stat-item">
                                15 <span>Awards</span>
                            </div>
                            <div class="col-md-4 stat-item">
                                2174 <span>Points</span>
                            </div>
                        </div>
                    </div>
                    <!-- Contact Info -->
                    <div class="col-12 col-lg-6">
                        <div class="contact--info mt-50 mb-100">
                            <h4>Basic Info</h4>
                            <ul class="contact-list">

                                <li>
                                    <h6><i class="fa fa-clock-o" aria-hidden="true"></i> Gender</h6>
                                    <h6>{{$volunteer -> jenis_kelamin}}</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h6>
                                    <h6>{{$volunteer -> nomor_telepon}}</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-envelope" aria-hidden="true"></i> Email</h6>
                                    <h6>{{$volunteer->email}}</h6>
                                </li>
                                <li>
                                    <h6><i class="fa fa-map-pin" aria-hidden="true"></i> Address</h6>
                                    <h6>{{$volunteer->alamat}}</h6>
                                </li>
                            </ul>

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