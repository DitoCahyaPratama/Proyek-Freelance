<?php

namespace App\Http\Controllers\Admin\Testimoni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class DeleteController extends Controller
{
    public function __invoke($id)
    {
        Testimonial::find($id)->delete();
        return redirect()->route('admin.testimoni.getAll')
        ->with('success', 'Testimonial Berhasil dihapus');
    }
}
