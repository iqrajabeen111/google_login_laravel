<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Session;
use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Validator;
use Laravel\Socialite\Facades\Socialite as FacadesSocialite;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function redirectToGoogle()
    {
        return FacadesSocialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {

        $user = FacadesSocialite::driver('google')->user();
        // dd($user);

        $finduser = User::where('google_id', $user->id)->first();

        if ($finduser) {

            FacadesAuth::login($finduser);

            return redirect('/googleredirectdashboard');
        } else {

            $newUser = User::create([
                'name' => $user->name,
                'email' => $user->email,
                'google_id' => $user->id,
                'social_type' => 'google',
                'password' => '',
                'is_email_verified' =>  1,
            ]);
            // dd( $newUser);
            FacadesAuth::login($newUser);

            return redirect('/googleredirectdashboard');
        }
    }


    public function logout()
    {
        Session::flush();
        FacadesAuth::logout();

        return Redirect('/');
    }
}
