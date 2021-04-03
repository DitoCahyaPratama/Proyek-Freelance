<?php

namespace App\Http\Controllers\Admin\Job;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        Job::find($id)->delete();
        return redirect()->route('admin.job.getAll')
        ->with('success', 'Pekerjaan Berhasil dihapus');
    }
}
