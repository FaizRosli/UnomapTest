<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function showAllPosts()
    {
        $posts = \App\Post::all();
        return view('post',['posts'=>$posts]);

    }
}
