<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;
use Carbon\carbon;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'dateline' => 'required',
            'salary' => 'required',
            'date_expired' => 'required',
        ]);
        $data=[
            'id_user'=>3,
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'dateline'=>$request->input('dateline'),
            'salary'=>$request->input('salary'),
            'status'=>0,
            'date_publish'=>Carbon::now(),
            'date_expired'=>$request->input('date_expired'),
        ];
        if (!$user = User::find($data['id_user'])) {
            return response()->json([
                'message'=>'sorry user not found'
            ]);
        }
        Project::create($data);
        return redirect()->route('admin.project.getAll')
        ->with('success', 'Projek Berhasil ditambah');
    }
}
