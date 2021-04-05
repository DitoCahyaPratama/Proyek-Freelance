<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use App\Models\Job;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'date_expired' => 'required',
        ]);
        $data=[
            'id_user'=>3,
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'date_publish'=>Carbon::now(),
            'date_expired'=>$request->input('date_expired'),
        ];
        if (!$user = User::find($data['id_user'])) {
            return response()->json([
                'message'=>'sorry user not found'
            ]);
        }
        Job::create($data);
        return redirect()->route('admin.job.getAll')
        ->with('success', 'Pekerjaan Berhasil ditambah');;
    }
}
