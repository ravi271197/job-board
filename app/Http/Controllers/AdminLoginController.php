<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function index(){
        if (Auth::guard('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return view('backend.auth.login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password, 'role_id' => 1])) {

            $request->session()->regenerate();
            toastr()->success('You are successfully loged in');
            return redirect()->intended('admin/dashboard');
        }

        toastr()->error('The provided credentials do not match our records.');

        return back();

    }
    
    public function logout(Request $request) {

        Auth::guard('admin')->logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/admin/login');
    }
    public function dashboard() {
        return view('backend.dashboard');
    }
}
