<?php

namespace App\Http\Controllers\Admin\ProjectClaim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectClaim;
use App\Models\User;
use App\Models\Project;
use DB;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $project=Project::where('status','=',0)->get();
        $user=User::all();
        $projectClaim=DB::table('project_claims')
        ->select('project_claims.*','users.name as nameUser','projects.name as nameProject')
        ->join('users','users.id','=','project_claims.id_user')
        ->join('projects','projects.id','=','project_claims.id_project')
        ->where('project_claims.status','=',0)
        ->paginate(5);
        return view('admin.pages.listProjectProgress',compact('projectClaim','project','user'));
    }
}
