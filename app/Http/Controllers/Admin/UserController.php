<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;

class UserController extends Controller
{
    public function index (){
        $users = User::paginate(4);
        return view('admin.moduls.users.index',['users'=>$users]);
    }
}
