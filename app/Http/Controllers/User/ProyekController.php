<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Project;

class ProyekController extends Controller
{
    //
    public function index(){
        $data = Project::orderBy('id', 'DESC')->limit(5)->get();
        return view('user.pages.proyek',compact('data'));
    }

    public function searchView(){
        $data = Project::orderBy('id', 'DESC')->limit(5)->get();
        return view('user.pages.cariprojek',compact('data'));
    }

    public function search(Request $request)
    {   
        $inputSearch = $request->input('inputSearch');
        $data = Project::orderBy('id', 'DESC')->where('name','like',"%".$inputSearch."%")->get();
        return view('user.pages.cariprojek', compact('data'));
    }

    public function myproyek(){
        return view('user.pages.myproyek');
    }
}
