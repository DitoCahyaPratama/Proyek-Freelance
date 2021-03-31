<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $project=Project::all();
        return $project;
    }
}
