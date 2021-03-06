<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\User;

class UpdateController extends Controller
{
    public function __invoke(Request $request,$id)
    {
        $request->validate([
            'id_user' => 'required',
            'name' => 'required',
            'description' => 'required',
            'dateline' => 'required',
            'salary' => 'required',
            'date_publish'=>'required',
            'date_expired' => 'required',
        ]);
        $data=[
            'id_user'=>$request->input('id_user'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'dateline'=>$request->input('dateline'),
            'salary'=>$request->input('salary'),
            'status'=>0,
            'date_publish'=>$request->input('date_publish'),
            'date_expired'=>$request->input('date_expired'),
        ];
        if (!$user = User::find($data['id_user'])) {
            return response()->json([
                'message'=>'sorry user not found'
            ]);
        }
        Project::find($id)->update($data);
        return "success";
    }
}
