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

            <!-- /.box-header -->
            <div class="box-body">
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <td><b>Report</b></td>
                            <td><b>Action</b></td>

                        </tr>
                    </thead>
                    @foreach($report as $adu)
                    <tbody>
                        <tr>
                            <td>{{$adu -> report}}</td>
                            <td>
                                <a href="#" type="button" class="btn btn-danger delete" information-id="{{$adu->id}}">Hapus</a>
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
                var report_id = $(this).attr('report-id');
                swal({
                        title: "Yakin?",
                        text: "Ingin dihapus data informasi dengan id " + report_id + "?",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        console.log(willDelete);
                        if (willDelete) {
                            window.location = "/admins/" + report_id + "/delete";
                        } else {

                        }
                    });
            });
        </script>
        @endsection
    </div>
</div>
@endsection