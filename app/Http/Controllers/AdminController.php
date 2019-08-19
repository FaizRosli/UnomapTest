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

        if (Auth::attempt($credentials)) 
        { 
            return redirect()->intended('home');
        }
        else
        {
            return Redirect::back()->withErrors(['username or password is wrong', 'The Message']);
        }
    }

    public function index()
    {
        $data_user = \App\User::where('role','user')->get();
        return view('admin.index', ['data_user'=>$data_user]);
    }
    
    public function showUpdateForm($id)
    {
        $user = \App\User::find($id);
        return view('admin.update',['user'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = \App\User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect('/Admin/index');
    }

    public function showAddForm()
    {
        return view('admin.add');
    }

    public function add(Request $request)
    {
        $user = new \App\User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 'user';
        $user->save();

        return redirect('/Admin/index');

    }

    public function delete($id)
    {
        $user = \App\User::find($id);
        $user->delete();
        return redirect('/Admin/index');
    }
}
