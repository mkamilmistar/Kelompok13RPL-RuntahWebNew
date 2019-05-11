<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Join;
use Auth;
use App\User;

class VolunteerController extends Controller
{
    //START OF ADMIN
    public function viewevent()
    {
        $events = Event::all();
        //dd($information);
        return view('admin.event', compact('events'));
    }
    public function publishevent(Request $request)
    {
        $events = new Event;
        $events->create($request->all());
        return redirect('/admins/event')->with('sukses', 'Event ditambahkan!');
    }
    public function editevent($id)
    {
        $events = Event::find($id);
        return view('admin.eventedit', compact('events'));
    }

    public function updateevent(Request $request, $id)
    {
        $events = Event::find($id);
        $events->update($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/', $request->file('image')->getClientOriginalName());
            $events->image = $request->file('image')->getClientOriginalName();
            $events->save();
        }
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
        $joins->status = "Belum Selesai";
        $joins->save();
        return redirect('volunteer/' . $joins->id . '/joined')->with('sukses', 'Join Event');
    }

    public function joined(Request $request)
    {
        $joins = Join::all();
        return view('sites.joined', compact('joins'));
    }

    public function confirm(Request $request, $id)
    {

        $joins = Join::find($id);
        $joins->status = "Selesai";
        if ($joins->status === "Selesai") {
            $user_id = $joins->user_id;
            $user = User::find($user_id);
            $user->point = $user->point + 5;
            $user->save();
        }
        $joins->save();
        //  dd($joins);
        return redirect('/volunteer')->with(['point' => 'tambah point']);
    }

    public function cancel($id)
    {
        $joins = Join::find($id);
        $joins->delete();
        return redirect('/volunteer')->with('cancel', 'Event berhasil dicancel!');
    }

    public function claimreward()
    {
        return view('sites.claimreward');
    }

    public function show($id)
    {
        $events = event::find($id);
        return view('sites.event', compact('events'));
    }
    //END OF SITES
}
