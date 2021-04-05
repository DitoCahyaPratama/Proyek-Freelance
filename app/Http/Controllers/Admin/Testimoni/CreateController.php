<?php

namespace App\Http\Controllers\Admin\Testimoni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;

class CreateController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'id_user' => 'required',
            'description' => 'required'
        ]);
        $data=[
            'id_user'=>$request->input('id_user'),
            'description'=>$request->input('description'),
        ];
        
        Testimonial::create($data);
        return redirect()->route('admin.testimoni.getAll')
        ->with('success', 'Testimoni Berhasil ditambah');
    }
}
