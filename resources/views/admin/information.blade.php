@extends('admin.layouts.master')
@section('title')
Information Admin
@endsection
@section('judulbesar')
Information
@endsection
@section('judulkecil')
Sampah
@endsection

@section('content')

@section('info')
class="active treeview"
@endsection
<!-- DataTales Example -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Data Information</h3>
                Pengangkatan Sampah Kabupaten Bogor
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td><b>Kecamatan</b></td>
                            <td><b>Hari/Tanggal</b></td>
                            <td><b>Jam</b></td>
                            <td><b>Action</b></td>

                        </tr>
                    </thead>
                    @foreach($information as $info)
                    <tbody>
                        <tr>
                            <td>{{$info -> kecamatan}}</td>
                            <td>{{$info -> date}}</td>
                            <td>{{$info -> time}}</td>
                            <td>
                                <a href="/admins/information/{{$info->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                <a href="#" type="button" class="btn btn-danger delete" information-id="{{$info->id}}">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach

                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        @section('script')
        <script>
            $('.delete').click(function() {
                var informations_id = $(this).attr('informations-id');
                swal({
                        title: "Yakin?",
                        text: "Ingin dihapus data informasi dengan id " + informations_id + "?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                            window.location = "/admins/" + informations_id + "/delete";
                        } else {

                        }
                    });
            });
        </script>
        @endsection
    </div>
</div>

@endsection