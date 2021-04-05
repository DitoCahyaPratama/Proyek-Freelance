<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $project=Project::where('status','=',0)->paginate(5);
        return view('admin.pages.listProjectAvailable',compact('project'));
    }
}
