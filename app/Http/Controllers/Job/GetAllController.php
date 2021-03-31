<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $job=Job::all();
        return $job;
    }
}
