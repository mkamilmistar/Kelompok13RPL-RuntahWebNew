@extends('sites.layouts.master')
@section('title')
Volunteer - Runtah WEB
@endsection
@section('content')
<div class="clever-catagory blog-details bg-img d-flex align-items-center justify-content-center p-3 height-400" style="background-image: url({{asset('/sites')}}/img/bg-img/bg0.jpg);">
    <div class="blog-details-headline">
        <h3>Anda Sedang Mengikuti Event!</h3>
        <div class="meta d-flex align-items-center justify-content-center">
            <a href="#">Iye13</a>
            <span><i class="fa fa-circle" aria-hidden="true"></i></span>
            <a href="#">Volunteer &amp; Non-Profit</a>
        </div>
    </div>
</div>
<div class="blog-details-content section-padding-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8">
                <div class="box">
                    <div class="box-header">
                        <br>
                        <h3 class="box-title">Anda Berhasil Mengikuti Event!</h3>
                        <br>
                    </div>
                    Selamat bla bla

                    Kalo udah kelar, konfirmasi dengan menekan tombol dibawah ini
                    <br>


                    <div class="box-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Event Yang Diikuti</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($joins as $join)
                                @if($join->status=="Belum Selesai")
                                <tr>
                                    <td>{{$join->event->location}}</td>
                                    <td>{{$join->status}}</td>

                                    <td>
                                        <a href="#" class="btn btn-primary join" join-id="{{$join->id}}">Event Selesai</a>
                                        <a href="#" type="button" class="btn btn-danger delete" event-id="{{$join->id}}">Batalkan</a>
                                    </td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>

                        </table>
                    </div>

                </div>
                <!-- /.box -->
            </div>
        </div>
    </div>
</div>


@section('script')
<script>
    $('.join').click(function() {
        var join_id = $(this).attr('join-id');
        swal({
                title: "Yakin?",
                text: "Apakah anda yakin telah menyelesaikan event tersebut?",
                icon: "info",
                buttons: true,
                dangerMode: false,
            })
            .then((willJoin) => {
                console.log(willJoin);
                if (willJoin) {
                    window.location = "/volunteer/" + join_id + "/confirm";
                } else {

                }
            });
    });
</script>
@endsection

@endsection