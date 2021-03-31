<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        Job::find($id)->delete();
        return "success";
    }
}
