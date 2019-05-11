<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Join;
use Auth;

class VolunteerController extends Controller
{
    //START OF ADMIN
    public function viewevent()
    {
        $events = Event::all();
        //dd($information);
        return view('admin.event', compact('events'));
    }

    public function editevent($id)
    {
        $events = Event::find($id);
        return view('admin.eventedit', compact('events'));
    }

    public function updateevent($id)
    {
        $events = Event::find($id);
        $events->update([
            'kabupaten' => request('kabupaten'),
            'kecamatan' => request('kecamatan'),
            'date' => request('date'),
            'time' => request('time'),
            'location' => request('location'),
            'status' => request('status')
        ]);
        return redirect('/admins/event')->with('sukses', 'Event updated!');
    }

    public function deleteevent($id)
    {
        $events = Event::find($id);
        $events->delete();
        return redirect('/admins/event')->with('sukses', 'Event berhasil dihapus');
    }
    //END OF ADMIN

    //START OF SITES
    public function volunteer(Request $request)
    {
        $events = event::all();

        return view('sites.volunteer', compact('events'));
    }

    public function join(Request $request, $id)
    {

        $joins = new Join;
        $joins->event_id = $id;
        $joins->user_id = Auth::user()->id;
        $joins->status = "belum-menyelesaikan";
        $joins->save();
        return redirect('/volunteer/{id}/joined')->with('sukses', 'Join Event');
    }

    public function joined($id)
    {
        $joins = Join::find($id);
        return view('sites.joined', compact('joins'));
    }

    //END OF SITES
}
