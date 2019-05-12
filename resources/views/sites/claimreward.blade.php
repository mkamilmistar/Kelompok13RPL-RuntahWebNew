@extends('sites.layouts.master')
@section('title')
Claim Reward - Runtah WEB
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
                    <h2 class="white-text">Claim Reward!</h2>
                    <p class="white-text">
                        <i>Congratulation!</i>
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
<div id="service" class="section md-padding">

    <!-- Container -->
    <div class="container">
        <div class="box-header">
            <br>
            <h3 class="box-title">Anda Berhasil Mendapat Reward!</h3>
            <br>
        </div>
        Selamat Anda Mendapat Payung

        atas dedikasi yang anda berikan, anda mendapat oi oi
        <br>
        Berikut link gopay , puas kan?
        <br>
    </div>
</div>
</div>
</div>


@section('script')

<script src="{{asset('admin/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script>
    $(function() {
        $('#example1').DataTable()
        $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
        })
    })
</script>
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
<script>
    @if(Session::has('point'))
    swal({
        title: "Good job!",
        text: "Kamu mendapat tambahan 5 point! Kumpulkan terus pointmu untuk mendapatkan reward!",
        icon: "success",
        button: "Baiklah!",
    });
    @endif
</script>
<script>
    @if(Session::has('cancel'))
    toastr.success("{{Session::get('cancel')}}", "Berhasil!")
    @endif
</script>
@endsection


@endsection