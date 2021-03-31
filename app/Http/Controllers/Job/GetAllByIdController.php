<?php

namespace App\Http\Controllers\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class GetAllByIdController extends Controller
{
    public function __invoke($id)
    {
        $job=Job::find($id);
        return $job;
    }
}
