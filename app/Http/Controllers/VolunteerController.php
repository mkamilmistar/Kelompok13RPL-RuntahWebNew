<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Volunteer;
use App\User;


class VolunteerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->has('cari')) {
            $data_volunteer = \App\Volunteer::where('nama_depan', 'LIKE', '%' . $request->cari . '%')->get();
        } else {
            $data_volunteer = \App\Volunteer::all();
        }
        return view('admin.Volunteer.index', ['data_volunteer' => $data_volunteer]);
    }

    public function dashboard()
    {

        return view('admin.Volunteer.dashboard');
    }

    public function create(Request $request)
    {
        //insert ke table volunteer
        $user = new \App\User;
        $user->role = 'volunteer';
        $user->name = $request->nama_depan;
        $user->email = $request->email;
        $user->password = bcrypt('rahasia');
        $user->remember_token = str_random(60);
        $user->save();

        //insert ke table volunteer
        $request->request->add(['user_id' => $user->id]);
        $volunteer = \App\Volunteer::create($request->all());
        return redirect('/volunteer')->with('sukses', 'Data berhasil ditambahkan');
    }

    public function edit(volunteer $volunteer)
    {
        return view('admin/volunteer/edit', ['volunteer' => $volunteer]);
    }

    public function update(Request $request, volunteer $volunteer)
    {
        $volunteer->update($request->all());
        return redirect('/volunteer')->with('sukses', 'Data Berhasil diedit');
    }

    public function delete(volunteer $volunteer, user $user)
    {

        $volunteer->delete();
        $user->delete();
        return redirect('/volunteer')->with('sukses', 'Data berhasil dihapus');
    }

    public function profile($id)
    {
        $user = \App\User::find($id);
        return view('sites.profile', ['user' => $user]);
    }
}
