<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wilayah;

class VolunteerController extends Controller
{
    public function volunteer()
    {
        $information = Wilayah::all();
        //dd($information);
        return view('sites.volunteer', compact('information'));
    }
}
