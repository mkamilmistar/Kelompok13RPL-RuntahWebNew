@extends('admin.layouts.master')
@section('title')
Report Admin
@endsection
@section('judulbesar')
Report
@endsection
@section('judulkecil')
Volunteer
@endsection

@section('content')
<!-- DataTales Example -->
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Table Data Report Volunteer</h3>
            </div>
            <div class="box-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <td><b>Username</b></td>
                            <td><b>Report</b></td>

                            <td><b>Action</b></td>

                        </tr>
                    </thead>
                    @foreach($report as $adu)
                    <tbody>
                        <tr>
                            <td>{{App\User::find($adu->report_id)->username}}</td>
                            <td>{{$adu -> report}}</td>
                            <td>
                                <a href="#" type="button" class="btn btn-danger delete" report-id="{{$adu->id}}">Hapus</a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach


                </table>
            </div>
        </div>
        <!-- /.box -->

        @section('script')

        <script src="{{asset('admin/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('admin/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
        <script>
            $('.delete').click(function() {
                var report_id = $(this).attr('report-id');
                swal({
                        title: "Yakin?",
                        text: "Ingin dihapus data report dengan id " + report_id + "?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                            window.location = "/admins/" + "report/" + report_id + "/delete";
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
@endsection