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

<!-- DataTales Example -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Data Information</h3>
                Pengangkatan Sampah Kabupaten Bogor
                <div class="right">
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah Data
                    </button>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Data Information</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="dataTables_length" id="kabupaten_id"><label>Show <select name="kabupaten_id" aria-controls="kabupaten_id" class="form-control input-sm">
                                        <option value="">-- Pilih Kabupaten --</option>
                                        @foreach ($district as $district)
                                        <option value="{{ $district->id }}">{{ ($district->kabupaten) }}</option>
                                        @endforeach
                                    </select> entries</label></div>
                        </div>
                        <div class="col-sm-6">
                            <div id="example1_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" placeholder="" aria-controls="kabupaten_id"></label></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="kabupaten_id" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                                <thead>
                                    <tr role="row">
                                        <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 182px;">Kecamatan</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 224px;">Hari/Tanggal</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 199px;">Jam</th>
                                        <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 156px;">Action</th>
                                    </tr>
                                </thead>
                                @foreach($subdistrict as $info)
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
                    </div>

                </div>
            </div>
            <!-- /.box-body -->
        </div>
    </div>
    @section('script')

    <script src="{{asset('admin/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
    <script>
        $('.delete').click(function() {
            var information_id = $(this).attr('information-id');
            swal({
                    title: "Yakin?",
                    text: "Ingin dihapus data informasi dengan id " + information_id + "?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    console.log(willDelete);
                    if (willDelete) {
                        window.location = "/admins/" + information_id + "/delete";
                    } else {

                    }
                });
        });
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
                        <input name="kabupaten" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kecamatan">
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