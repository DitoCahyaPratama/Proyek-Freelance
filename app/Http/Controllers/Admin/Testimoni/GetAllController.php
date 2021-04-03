<?php

namespace App\Http\Controllers\Admin\Testimoni;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use DB;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $user=User::all();
        $testimoni=DB::table('testimonials')
        ->select('testimonials.*','testimonials.id as idTestimonial','users.name')
        ->join('users','users.id','=','testimonials.id_user')        
        ->paginate(5);
        return view('admin.pages.listTestimoni',compact('testimoni','user'));
    }
}
