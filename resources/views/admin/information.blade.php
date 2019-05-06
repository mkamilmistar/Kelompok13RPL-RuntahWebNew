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

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <label for="roll">Kabupaten <span class="required">*</span></label>
                    <select name="state" class="form-control" id="state">
                        <option value="">-- Pilih Kabupaten --</option>
                        @foreach ($district as $district)
                        <option value="{{ $district->id }}">{{ ($district->kabupaten) }}</option>
                        @endforeach
                        <thead>
                            <tr>
                                <td><b>Kecamatan</b></td>
                                <td><b>Hari/Tanggal</b></td>
                                <td><b>Jam</b></td>
                                <td><b>Action</b></td>

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
                    </select>


                </table>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

        @section('script')
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