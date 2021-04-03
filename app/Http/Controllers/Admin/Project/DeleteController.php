<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        Project::find($id)->delete();
        return redirect()->route('admin.project.getAll')
        ->with('success', 'Projek Berhasil dihapus');
    }
}
