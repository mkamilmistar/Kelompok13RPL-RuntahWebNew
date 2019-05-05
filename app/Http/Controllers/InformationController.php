<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Information;
use Auth;

class InformationController extends Controller
{
    //AWAL INFORMATION

    public function information(Request $request)
    {
        $information = Information::all();
        //dd($information);
        return view('admin.information', compact('information'));
    }

    public function publishinfo()
    {
        Information::create([
            'kecamatan' => request('kecamatan'),
            'date' => request('date'),
            'time' => request('time')
        ]);

        return redirect('/admins/information');
    }

    //AKHIR INFORMATION

}
