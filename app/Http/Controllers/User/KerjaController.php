<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KerjaController extends Controller
{
    //
    public function index(){
        return view('user.pages.kerja');
    }

    public function search(){
        return view('user.pages.carikerja');
    }

    public function myjob(){
        return view('user.pages.myjob');
    }
}
