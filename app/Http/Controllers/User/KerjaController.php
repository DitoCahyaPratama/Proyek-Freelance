<?php

namespace App\Http\Controllers\User;

use App\Models\Job;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class KerjaController extends Controller
{
    public function index()
    {
        $job = Job::orderBy('id', 'DESC')->limit(5)->get();
        return view('user.pages.kerja', compact('job'));
    }

    public function search()
    {
        $job = Job::orderBy('id', 'DESC')->limit(6)->get();
        return view('user.pages.carikerja', compact('job'));
    }

    public function myjob()
    {
//        $job = Job::with()->->paginate(6);
//        return view('user.pages.myjob', compact('job'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date_expired' => 'required',
        ]);
        $data = [
            'id_user' => Auth::id(),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'date_publish' => Carbon::now(),
            'date_expired' => $request->input('date_expired'),
        ];
        if (!$user = User::find($data['id_user'])) {
            return response()->json([
                'message' => 'sorry user not found'
            ]);
        }
        Job::create($data);
        return redirect()->route('user.jobsaya')
            ->with('success', 'Pekerjaan Berhasil ditambah');
    }

    public function getById()
    {

    }

    public function delete()
    {

    }

    public function update()
    {

    }
}
