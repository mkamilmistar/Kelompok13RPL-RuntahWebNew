@extends('sites.layouts.master')
@section('title')
Event - Runtah WEB
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
                    <h2 class="white-text">Yuk, jadi bagian dari penyelamat dunia!</h2>
                    <p class="white-text">
                        <i>Volunteer Runtah solusinya!</i>
                    </p>
                </div>
            </div>
            <!-- /home content -->

        </div>
    </div>
</div>
<!-- /home wrapper -->
<!-- /home wrapper -->
@endsection
@section('content')
<div class="container">
    <!-- Row -->
    <!-- Section header -->
    <div class="page-content content">
        <div class="section-header text-center">
            <h2 class="title">{{$events->nama_event}}'s Event</h2>
            About Event
        </div>
        <div class="contact--info inner">
            <h2>Foto Event</h2>
            <div class="row justify-content-center">
                <img src="{{asset('images/'.$events->image)}}" class="img-circle" style="width:300px;height:300px;object-fit: cover;border-radius:8px" alt="Avatar">
            </div>
            <!-- Contact Info -->
            <div id="main" class="col-md-50">
                <div class="col-6 col-lg-50">
                    <br>
                    <h5>Basic Info</h5>
                    <ul class="contact-list">
                        @if ( !empty ( $events->nama_event ) )
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Nama Event</h6>
                            <h6>{{$events->nama_event}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Nama Event</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @if ( !empty ( $events->kabupaten ) )
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Kabupaten</h6>
                            <h6>{{$events->kabupaten}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-user" aria-hidden="true"></i>Kabupaten</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @if ( !empty ( $events->kecamatan ) )
                        <li>
                            <h6><i class="fa fa-intersex" aria-hidden="true"></i>Kecamatan</h6>
                            <h6>{{$events->kecamatan}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-intersex" aria-hidden="true"></i>Kecamatan</h6>
                            <h6>-</h6>
                        </li>
                        @endif

                        @if ( !empty ( $events->date ) )
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>Hari/Tanggal</h6>
                            <h6>{{$events -> date}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-phone" aria-hidden="true"></i>Hari/Tanggal</h6>
                            <h6>-</h6>
                        </li>
                        @endif

                        @if ( !empty ( $events->time ) )
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>Jam</h6>
                            <h6>{{$events->time}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-envelope" aria-hidden="true"></i>Jam</h6>
                            <h6>-</h6>
                        </li>
                        @endif

                        @if ( !empty ( $events->location ) )
                        <li>
                            <h6><i class="fa fa-home" aria-hidden="true"></i>Lokasi</h6>
                            <h6>{{$events->location}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-home" aria-hidden="true"></i>Lokasi</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @if(auth()->user()->role=='admin')
                        <label for=""></label>
                        @else(auth()->user()->role=='volunteer')
                        @if ( !empty ( $events->status ) )
                        <li>
                            <h6><i class="fa fa-square" aria-hidden="true"></i>Status</h6>
                            <h6>{{$events->status}}</h6>
                        </li>
                        @else
                        <li>
                            <h6><i class="fa fa-square" aria-hidden="true"></i>Status</h6>
                            <h6>-</h6>
                        </li>
                        @endif
                        @endif
                    </ul>
                    <div class="row justify-content-center">
                        <a href="#" event-id="{{$events->id}}" class="main-btn join">Join Event Ini!</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- END PROFILE HEADER -->
    </div>
</div>
</div>
<!-- ##### Regular Page Area End ##### -->
@section('script')
<script>
    $('.join').click(function() {
        var event_id = $(this).attr('event-id');
        swal({
                title: "Yakin?",
                text: "Apakah anda yakin ingin mengikuti event ini?",
                icon: "info",
                buttons: true,
                dangerMode: false,
            })
            .then((willJoin) => {
                console.log(willJoin);
                if (willJoin) {
                    window.location = "/volunteer/" + event_id + "/join";
                } else {

                }
            });
    });
</script>

@endsection
@endsection