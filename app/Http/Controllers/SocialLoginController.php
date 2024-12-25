<?php

namespace App\Http\Controllers;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class SocialLoginController extends Controller
{
    public function login()
    {
        return Socialite::driver('github')->redirect();
    }

    public function loginCallback(Request $request)
    {

        $githubUser = Socialite::driver('github')->user();
        
        $user = User::updateOrCreate(
            [
                'social_id' => $githubUser->id,
                'provider' => 'github',
            ],
            [
                'name' => isset($githubUser->name)? $githubUser->name : "",
                'email' => $githubUser->email,
                'social_token' => $githubUser->token,
                'role_id' => Roles::userRole(), 
            ]
        );
        
        Auth::login($user);

        return redirect('/dashboard');
    }
}
