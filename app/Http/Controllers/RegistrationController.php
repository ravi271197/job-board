<?php

namespace App\Http\Controllers;

use App\Jobs\SendMail as JobsSendMail;
use App\Mail\SendMail;
use App\Mail\UserRegistered;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class RegistrationController extends Controller
{

    public function index(){
        return view('frontend.auth.registration');
    }

    public function signUp(Request $request){

        
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->role_id = Roles::userRole();

        $user->save();

        JobsSendMail::dispatch($user);
    
        toastr()->success('You are successfully Sign up');
        return redirect()->route('login');

    }


}
