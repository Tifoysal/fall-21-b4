<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function userlist(){
        $users= User::where('role','user')->get();
        return view('admin.pages.user-list',compact('users'));
    }
}
