@extends('admin.layouts.master')
@section('judulbesar')
Data Volunteer
@endsection
@section('judulkecil')
Volunteer merupakan orang yang sukarela membantu membersihkan sampah.
@endsection
@section('title')
Data Volunteer
@endsection
@section('content')

<!-- Table Baru -->
<!-- Page Heading -->

<!-- DataTales Example -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Data Volunteer</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td><b>User Name</b></td>
                            <td><b>Role</b></td>
                            <td><b>Nama Depan</b></td>
                            <td><b>Nama Belakang</b></td>
                            <td><b>Jenis Kelamin</b></td>
                            <td><b>Nomor Telepon</b></td>
                            <td><b>Alamat</b></td>
                            <td><b>NIK Pengguna</b></td>
                            <td><b>Poin</b></td>
                            <td><b>Action</b></td>

                        </tr>
                    </thead>
                    @foreach($data_volunteer as $volunteer)
                    <tbody>
                        <tr>
                            <td>{{$volunteer -> username}}</td>
                            <td>{{$volunteer -> role}}</td>
                            <td>{{$volunteer -> nama_depan}}</td>
                            <td>{{$volunteer -> nama_belakang}}</td>
                            <td>{{$volunteer -> jenis_kelamin}}</td>
                            <td>{{$volunteer -> nomor_telepon}}</td>
                            <td>{{$volunteer -> alamat}}</td>
                            <td>{{$volunteer -> nik_pengguna}}</td>
                            <td>{{$volunteer -> poin}}</td>
                            <td>
                                <a href="/admins/{{$volunteer->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                <a href="#" type="button" class="btn btn-danger delete" volunteer-id="{{$volunteer->id}}">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        @endsection

        @section('script')
        <script>
            $('.delete').click(function() {
                var volunteer_id = $(this).attr('volunteer-id');
                swal({
                        title: "Yakin?",
                        text: "Ingin dihapus data volunteer dengan id " + volunteer_id + "?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                            window.location = "/admins/" + volunteer_id + "/delete";
                        } else {

                        }
                    });
            });
        </script>
        @endsection