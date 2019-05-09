<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Auth;
use App\District;
use App\Subdistrict;
use App\Http\Controllers\Controller;

class InformationController extends Controller
{
    //AWAL INFORMATION

    public function information(Request $request)
    {
        $district = District::all();
        $subdistrict = Subdistrict::all();
        //dd($information);
        return view('admin.information', compact('district', 'subdistrict'));
    }

    public function publishinfo(Request $request)
    {
        $district = new District;
        $district->kabupaten = $request->input('kabupaten');
        $district->save();
        if ($request->has('kabupaten')) {
            $subdistrict = new Subdistrict;
            $subdistrict->kecamatan = $request->input('kecamatan');
            $subdistrict->date = $request->input('date');
            $subdistrict->time = $request->input('time');
            $subdistrict->save();
        }


        return redirect('/admins/information');
    }

    //AKHIR INFORMATION

}
