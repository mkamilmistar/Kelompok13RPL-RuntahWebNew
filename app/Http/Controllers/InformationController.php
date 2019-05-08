<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Auth;
use App\Wilayah;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class InformationController extends Controller
{
    //AWAL INFORMATION

    public function information()
    {
        $wilayah = Wilayah::all();
        //dd($information);
        return view('admin.information', compact('wilayah'));
    }



    public function publishinfo(Request $request)
    {

        $wilayah = new Wilayah();
        $wilayah->kabupaten = $request->input('kabupaten');
        $wilayah->kecamatan = $request->input('kecamatan');
        $wilayah->date = $request->input('date');
        $wilayah->time = $request->input('time');
        $wilayah->save();

        return redirect('/admins/information');
    }

    public function deleteinfo($id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->delete();
        return redirect('/admins/information')->with('sukses', 'Info berhasil dihapus');
    }
    //AKHIR INFORMATION

}
