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
                            <th>Nama Event</th>
                            <th>Kabupaten</th>
                            <th>Kecamatan</th>
                            <th>Hari/Tanggal</th>
                            <th>Jam</th>
                            <th>Lokasi</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $info)
                        <tr>
                            <td><a href="/event/{{$info->id}}" target="_blank"> {{$info->nama_event}}</a></td>
                            <td>{{$info->kabupaten}}</td>
                            <td>{{$info->kecamatan}}</td>
                            <td>{{ date('l, d M Y', strtotime($info->date)) }}</td>
                            <td>{{ date('H.i', strtotime($info->time)) }}</td>
                            <td>{{$info->location}}</td>
                            <td>{{$info->status}}</td>
                            <td>
                                <a href="/admins/event/{{$info->id}}/edit" type="button" class="btn btn-warning">Edit</a>
                                <a href="#" type="button" class="btn btn-danger delete" event-id="{{$info->id}}">Hapus</a>
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
            var event_id = $(this).attr('event-id');
            swal({
                    title: "Yakin?",
                    text: "Ingin dihapus data event dengan id " + event_id + "?",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    console.log(willDelete);
                    if (willDelete) {
                        window.location = "/admins/" + "event/" + event_id + "/delete";
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Event Provinsi Jawa Barat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/admins/event/create" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    @if(count($errors)>0)
                    @foreach($errors->all() as $error)
                    <div class="alert alert-dismissible alert-danger">
                        {{$error}}
                    </div>
                    @endforeach
                    @endif
                    <div class="form-group">
                        <label for="nama_event">Nama Event</label>
                        <input name="nama_event" required type="text" class="form-control" id="nama_event" aria-describedby="emailHelp" placeholder="Nama Event">
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <input name="kabupaten" required type="text" class="form-control" id="kabupaten" aria-describedby="emailHelp" placeholder="Bogor">
                    </div>
                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <input name="kecamatan" required type="text" class="form-control" id="kecamatan" aria-describedby="emailHelp" placeholder="Dramaga">
                    </div>
                    <div class="form-group">
                        <label for="date">Hari/Tanggal</label>
                        <input name="date" required type="date" class="form-control" id="date" aria-describedby="emailHelp" placeholder="Sun, 24 Mei 2018">
                    </div>
                    <div class="form-group">
                        <label for="time">Jam</label>
                        <input name="time" required type="time" class="form-control" id="time" aria-describedby="emailHelp" placeholder="16.00">
                    </div>
                    <div class="form-group">
                        <label for="location">Lokasi</label>
                        <textarea required name="location" class="form-control" id="location" rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="Select">Status</label>
                        <select required name="status" class="form-control" id="Select">
                            <option value="Tersedia">Tersedia</option>
                            <option value="Tidak Tersedia">Tidak Tersedia</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="image">Photo Event</label>
                        <input type="file" name="image" id="image" class="form-control">
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