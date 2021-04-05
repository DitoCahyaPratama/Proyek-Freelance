<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class GetAllByIdController extends Controller
{
    public function __invoke($id)
    {
        $project=Project::find($id);
        return $project;
    }
}
