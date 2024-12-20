<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except([
            'logout',
            'dashboard'
        ]);
    }

    public function index()
    {
        return view('frontend.auth.login');
    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 2])) {

            $request->session()->regenerate();
            toastr()->success('You are successfully loged in');
            return redirect()->intended('dashboard');
        }

        toastr()->error('The provided credentials do not match our records.');

        return back();
    }


    public function logout(Request $request)
    {

        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
    public function dashboard()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        return view('frontend.dashboard');
    }
}
