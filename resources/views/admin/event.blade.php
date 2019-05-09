@extends('admin.layouts.master')
@section('title')
Event Admin
@endsection
@section('judulbesar')
Information
@endsection
@section('judulkecil')
Event
@endsection

@section('content')

<!-- DataTales Example -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Data Event</h3>
                Event Volunteer Provinsi Jawa Barat
                <div class="right">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data
                    </button>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Event</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Hari/Tanggal</th>
                            <th>Jam</th>
                            <th>Lokasi</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($event as $info)
                        <tr>
                            <td>{{$info->kabupaten}}</td>
                            <td>{{$info->kecamatan}}</td>
                            <td>{{$info->date}}</td>
                            <td>{{$info->time}}</td>
                            <td>Lokasi</td>
                            <td>
                                <a href="/admins/information/{{$info->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                <a href="#" type="button" class="btn btn-danger delete" wilayah-id="{{$info->id}}">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    @section('script')

    <script src="{{asset('admin/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $('.delete').click(function() {
            var wilayah_id = $(this).attr('wilayah-id');
            swal({
                    title: "Yakin?",
                    text: "Ingin dihapus data informasi dengan id " + wilayah_id + "?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    console.log(willDelete);
                    if (willDelete) {
                        window.location = "/admins/" + "information/" + wilayah_id + "/delete";
                    } else {

                    }
                });
        });
    </script>
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
    @endsection
</div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Jadwal Sampah Kabupaten Bogor</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admins/information/create" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="text">Kabupaten</label>
                        <input name="kabupaten" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kabupaten">
                    </div>
                    <div class="form-group">
                        <label for="text">Kecamatan</label>
                        <input name="kecamatan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kecamatan">
                    </div>
                    <div class="form-group">
                        <label for="text">Hari/Tanggal</label>
                        <input name="date" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Hari/Tanggal">
                    </div>
                    <div class="form-group">
                        <label for="text">Jam</label>
                        <input name="time" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jam">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection