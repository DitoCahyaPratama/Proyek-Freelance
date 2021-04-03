<?php

namespace App\Http\Controllers\Admin\ProjectClaim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectClaim;
use DB;

class GetAllByStatusOneController extends Controller
{
    public function __invoke()
    {
        $projectDone=DB::table('project_claims')
        ->select('project_claims.*','users.name as nameUser','projects.name as nameProject')
        ->join('users','users.id','=','project_claims.id_user')
        ->join('projects','projects.id','=','project_claims.id_project')
        ->where('project_claims.status','=',1)
        ->paginate(5);
        return view('admin.pages.listProjectDone',compact('projectDone'));
    }
}
