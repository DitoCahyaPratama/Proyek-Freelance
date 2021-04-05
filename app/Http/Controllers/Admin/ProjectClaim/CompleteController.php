<?php

namespace App\Http\Controllers\Admin\ProjectClaim;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProjectClaim;

class CompleteController extends Controller
{
    public function __invoke($id)
    {
        ProjectClaim::find($id)->update(['status'=>1]);
        return redirect()->route('admin.projectclaims.getAll')
        ->with('success', 'Projek Berhasil diselesaikan'); 
    }
}
