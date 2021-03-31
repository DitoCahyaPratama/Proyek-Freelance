<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Session;

class LoginController extends Controller
{
    function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $data=[
            'email'=>$request->input('email'),
            'password'=>$request->input('password')
        ];
        
        if (!$user = User::where('email','=',$data['email'])->first()) {
            return response()->json([
                'message'=>'sorry email incorrect'
            ]);
        }
        
        if(!Hash::check($data['password'],$user->password)) {
            $request->session()->put('idUser', $user->id);
            return response()->json([
                'message'=>'sorry password incorrect'
            ]);
        }

        return response()->json([
            'message'=>'login success'
        ]);
    }
}
