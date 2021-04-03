<?php

namespace App\Http\Controllers\Admin\ProjectClaim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectClaim;
use Carbon\carbon;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'id_project' => 'required'
        ]);
        $data=[
            'id_user'=>$request->input('id_user'),
            'id_project'=>$request->input('id_project'),
            'status'=>0,
            'date_claim'=>Carbon::now()
        ];
        
        ProjectClaim::create($data);
        Project::find($data['id_project'])->update(['status'=>1]);
        return redirect()->route('admin.projectclaims.getAll')
        ->with('success', 'Projek Claim Berhasil ditambah');
    }
}
