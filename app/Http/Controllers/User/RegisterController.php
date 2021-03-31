<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;

class RegisterController extends Controller
{
    public function __invoke(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'name' => 'required',
            'description' => 'required',
            'role' => 'required'
        ]);
        $data=[
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'role'=>$request->input('role'),
        ];
        User::create($data);
        // return response()->json([
        //     'message'=>$request->password
        // ]);
        
    }
}
