<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\User;
use App\Models\Project;
use App\Models\ProjectClaim;
use App\Models\Testimonial;

class GetCountController extends Controller
{
    public function __invoke()
    {
        $countUser=User::all()->count();
        $countJob=Job::all()->count();
        $countTesti=Testimonial::all()->count();
        $countProject=Project::where('status','=',0)->count();
        $countProjectClaim=ProjectClaim::where('status','=',0)->count();
        $countProjectDone=ProjectClaim::where('status','=',1)->count();

        return view('admin.pages.dashboard',compact('countUser','countTesti','countJob','countProject','countProjectClaim','countProjectDone'));
    }
}

