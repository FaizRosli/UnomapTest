<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class UserController extends Controller
{
    //
    public function index()
    {
        $user_id = Auth::user()->id;
        $data_post = \App\Post::where('user_id',$user_id)->get();

        return view('user.index',['data_post'=>$data_post]);
    }

    public function showAddForm()
    {
        return view('user.add');
    }

    public function add(Request $request)
    {
        $user_id = Auth::user()->id;
        $data_post = new \App\Post;

        $data_post->title = $request->title;
        $data_post->content= $request->content;
        $data_post->user_id=$user_id;

        $data_post->save();

        return redirect('/user/index');

    }
}
