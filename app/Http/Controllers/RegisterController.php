<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\UserVerify;
use Illuminate\Support\Facades\Hash;
use Mail;
use Carbon\Carbon; 
use App\Models\User;


class RegisterController extends Controller
{
    //
    public function index()
    {
        # code...
        return view('register');
    }


    public function register(Request $request)
    {

        # code...
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        // $check->notify(new WelcomeEmailNotification());
        $token = Str::random(64);

        UserVerify::create([
            'user_id' => $check->id,
            'token' => $token
        ]);

        Mail::send('emailVerificationEmail', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Email Verification Mail');
        });

        return redirect("/")->withSuccess('Great! You have Successfully loggedin');
        // return redirect()->route('login');

    }

    public function verifyAccount($token)
    {
        $verifyUser = UserVerify::where('token', $token)->first();
        
        // dd( $verifyUser );
        $message = 'Sorry your email cannot be identified.';
        
        if (!is_null($verifyUser)) {
            $user = $verifyUser->user;
            // dd($user->is_email_verified);
            
            if (!$user->is_email_verified) {
                $verifyUser->user->is_email_verified = 1;
                $verifyUser->user->email_verified_at = Carbon::now();
                $verifyUser->user->save();
                $message = "Your e-mail is verified. You can now login.";
            } else {
                $message = "Your e-mail is already verified. You can now login.";
            }
        }

        return redirect('/')->with('message', $message);
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
