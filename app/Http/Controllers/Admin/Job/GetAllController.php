<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $job=Job::select('jobs.*','users.name as nameUser')->join('users','users.id','=','jobs.id_user')->paginate(5);
        return view('admin.pages.listJob',compact('job'));
    }
}
