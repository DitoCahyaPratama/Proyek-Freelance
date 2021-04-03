<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GetAllController extends Controller
{
    public function __invoke()
    {
        $user=User::paginate(5);
        return view('admin.pages.listUser',compact('user'));
    }
}
