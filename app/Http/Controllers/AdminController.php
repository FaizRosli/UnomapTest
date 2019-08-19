<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Redirect;

class AdminController extends Controller
{
    //
    public function showLoginForm()
    {
        return view('auth.adminlogin');
    }
    public function login(Request $request)
    {
        
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
           
            
            return redirect()->intended('home');
        }
        else{
            //return redirect('/Admin/Login');
            return Redirect::back()->withErrors(['username or password is wrong', 'The Message']);
        }
    }
    
}
