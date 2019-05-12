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
        $this->validate($request, [
            'kabupaten' => 'max:25',
            'kecamatan' => 'max:25',
            'date' => 'max:20',
            'time' => 'max:20',
        ]);
        $wilayah = new Wilayah();
        $wilayah->user_id = Auth::user()->id;
        $wilayah->kabupaten = $request->input('kabupaten');
        $wilayah->kecamatan = $request->input('kecamatan');
        $wilayah->date = $request->input('date');
        $wilayah->time = $request->input('time');
        $wilayah->save();

        return redirect('/admins/information')->with('sukses', 'Info berhasil ditambahkan!');
    }

    public function editinfo($id)
    {
        $wilayah = Wilayah::find($id);
        return view('admin.informationedit', compact('wilayah'));
    }

    public function updateinfo($id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->update([
            'kabupaten' => request('kabupaten'),
            'kecamatan' => request('kecamatan'),
            'date' => request('date'),
            'time' => request('time')
        ]);
        return redirect('/admins/information')->with('sukses', 'Info updated!');
    }
    public function deleteinfo($id)
    {
        $wilayah = Wilayah::find($id);
        $wilayah->delete();
        return redirect('/admins/information')->with('sukses', 'Info berhasil dihapus!');
    }
    //AKHIR INFORMATION

}
