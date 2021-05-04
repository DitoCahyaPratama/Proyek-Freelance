<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function client(){
        $user = Auth::user();
        return view('user.pages.profileclient', compact('user'));
    }
    public function freelance(){
        return view('user.pages.profilefreelance');
    }
}
