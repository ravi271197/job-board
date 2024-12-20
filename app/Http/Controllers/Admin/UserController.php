<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){

        $users_arr = array();

        $users = User::all();
        if (isset($users) && !empty($users)) {
            $users_arr = $users;
        }
        return view('backend.users.index',['users' => $users_arr]);
    }

}
