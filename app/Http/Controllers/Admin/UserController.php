<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $users_arr = array();

        $users = User::where('role_id', 2)->get();
        if (isset($users) && !empty($users)) {
            $users_arr = $users;
        }
        return view('backend.users.index', ['users' => $users_arr]);
    }

    public function view($id)
    {
        $user = User::find($id);
        if (!$user) {
            toastr()->error('User not found');
            return redirect()->back();
        }
        return view('backend.users.edit', ['user' => $user]);
    }

    public function delete($id) {

        $user = User::find($id);
        if (!$user) {
            toastr()->error('User not found');
            return redirect()->back();
        }
        $user->delete();
        
        return view('backend.users.index');
    }
}
