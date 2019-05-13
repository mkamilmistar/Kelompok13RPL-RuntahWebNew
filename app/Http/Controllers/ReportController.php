<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use Auth;

class ReportController extends Controller
{
    public function report()
    {
        return view('sites.report');
    }
    public function postreport(Request $request)
    {
        $this->validate($request, [
            'report' => 'required',
        ]);
        $report = new Report;
        $report->report_id = Auth::user()->id;
        $report->report = $request->input('report');
        $report->save();

        return redirect('/')->with('sukses', 'Report berhasil dikirimkan!');
    }

    public function viewreport(Request $request)
    {
        $report = Report::all();
        //dd($report);
        return view('admin.report', compact('report'));
    }

    public function deletereport($id)
    {
        $wilayah = Report::find($id);
        $wilayah->delete();
        return redirect('/admins/report')->with('sukses', 'Report berhasil dihapus!');
    }
}
