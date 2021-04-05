<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    //
    public function client(){
        return view('user.pages.profileclient');
    }
    public function freelance(){
        return view('user.pages.profilefreelance');
    }
}
