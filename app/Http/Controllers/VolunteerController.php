<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use App\Join;
use Auth;
use App\User;

class VolunteerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    //START OF ADMIN
    public function viewevent()
    {
        $events = Event::all();
        //dd($information);
        return view('admin.event', compact('events'));
    }
    public function publishevent(Request $request)
    {
        $this->validate($request, [
            'nama_event' => 'required',
            'kabupaten' => 'required',
            'kecamatan' => 'required',
            'date' => 'required',
            'time' => 'required',
            'location' => 'required',
            'status' => 'required',
            'image' => 'required|file|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $events = new Event();
        $events->nama_event = $request->input('nama_event');
        $events->kabupaten = $request->input('kabupaten');
        $events->kecamatan = $request->input('kecamatan');
        $events->date = $request->input('date');
        $events->time = $request->input('time');
        $events->location = $request->input('location');
        $events->status = $request->input('status');
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/event/', $request->file('image')->getClientOriginalName());
            $events->image = $request->file('image')->getClientOriginalName();
        } else {
            return $request;
            $events->image = 'default.jpg';
        }
        $events->save();
        //dd($events);
        return redirect('/admins/event')->with('sukses', 'Event ditambahkan!');
    }
    public function editevent($id)
    {
        $events = Event::find($id);
        return view('admin.eventedit', compact('events'));
    }

    public function updateevent(Request $request, $id)
    {
        $this->validate($request, [
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'kabupaten' => 'max:25',
            'kecamatan' => 'max:25',
            'location' => 'max:50',
        ]);
        $events = Event::find($id);
        $events->update($request->all());
        if ($request->hasFile('image')) {
            $request->file('image')->move('images/event/', $request->file('image')->getClientOriginalName());
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
        $user = User::find(Auth::user()->id);

        if ($user->jenis_kelamin == null) {
            return redirect('/profile')->with('lengkapi', 'Lengkapi profile terlebih dahulu!');
        } else {
            $joins = new Join;
            $joins->event_id = $id;
            $joins->user_id = Auth::user()->id;
            $joins->status = "Belum Selesai";
            $joins->save();
            return redirect('volunteer/history')->with('sukses', 'Join Event');
        }
    }

    public function joined(Request $request)
    {
        $joins = join::where('user_id', Auth::user()->id)->get();
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
        return redirect('/volunteer/history')->with('cancel', 'Event berhasil dicancel!');
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

    public function history(Request $request)
    {
        $histories = join::where('user_id', Auth::user()->id)->get();
        $one = join::where('user_id', Auth::user()->id)->get()->first();
        return view('sites.history', compact('histories', 'one'));
    }
    //END OF SITES
}
