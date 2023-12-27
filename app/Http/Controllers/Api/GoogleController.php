<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;


class GoogleController extends Controller
{
    public function getGoogleSignInUrl()
    {
        return Socialite::driver('google')->redirect();
    }

    public function loginCallback()
    {
        $user = Socialite::driver('google')->stateless()->user();

        $users = User::where("google_id",$user->id)->first();

        if(!empty($users)){
            Auth::login($users);
            return redirect('/');
        } else {
            $users = User::create([
                'name'=>$user->name,
                'email'=>$user->email,
                'google_id'=>$user->id,
            ]);

            Auth::login($users);

            return redirect('/');
        }
    }
}
