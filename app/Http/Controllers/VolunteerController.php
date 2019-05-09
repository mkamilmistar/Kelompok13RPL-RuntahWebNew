<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;

class VolunteerController extends Controller
{
    public function viewevent()
    {
        $event = Event::all();
        //dd($information);
        return view('admin.event', compact('event'));
    }

    public function volunteer()
    {
        $information = Event::all();
        //dd($information);
        return view('sites.volunteer', compact('information'));
    }
}
