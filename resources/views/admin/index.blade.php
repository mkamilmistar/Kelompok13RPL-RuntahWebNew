@extends('admin.layouts.master')
@section('judulbesar')
Data Volunteer
@endsection
@section('judulkecil')
Volunteer merupakan orang yang sukarela membantu membersihkan sampah.
@endsection
@section('title')
Data Volunteer Admin
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
                            <td><b>Email</b></td>
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
                    @foreach($data_volunteer as $user)
                    <tbody>
                        <tr>
                            <td>{{$user -> username}}</td>
                            <td>{{$user -> email}}</td>
                            <td>{{$user -> nama_depan}}</td>
                            <td>{{$user -> nama_belakang}}</td>
                            <td>{{$user -> jenis_kelamin}}</td>
                            <td>{{$user -> nomor_telepon}}</td>
                            <td>{{$user -> alamat}}</td>
                            <td>{{$user -> nik_pengguna}}</td>
                            <td>{{$user -> point}}</td>
                            <td>
                                <a href="/admins/{{$user->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                <a href="#" type="button" class="btn btn-danger delete" user-id="{{$user->id}}">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Data Admin</h3>
            </div>
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td><b>User Name</b></td>
                            <td><b>Email</b></td>


                        </tr>
                    </thead>
                    @foreach($data_admin as $admin)
                    <tbody>
                        <tr>
                            <td>{{$admin -> username}}</td>
                            <td>{{$admin -> email}}</td>

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
                var user_id = $(this).attr('user-id');
                swal({
                        title: "Yakin?",
                        text: "Ingin dihapus data volunteer dengan id " + user_id + "?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                            window.location = "/admins/" + user_id + "/delete";
                        } else {

                        }
                    });
            });
        </script>
        @endsection