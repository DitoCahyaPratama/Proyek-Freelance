<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;

class LogoutController extends Controller
{
    public function __invoke()
    {
        $request->session()->forget('idUser');
        return "success logout";
    }
}
