<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class LoginController extends Controller
{   
   
    
    public function index()
    {

        return redirect("/");
    }

    public function login(Request $request)
    {
     
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        
        if (FacadesAuth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = FacadesAuth::user();
            
            // dd("asdasdasd");
            return redirect('dashboard');
        }
        
        // if unsuccessful -> redirect back
        return redirect()->back()->withErrors([
            'message', 'Login details are not valid',
        ]);
    }
    public function errorpage()
    {
        return view('404page');
    }
}
