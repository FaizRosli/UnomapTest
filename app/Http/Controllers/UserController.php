<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Resources\Post as PostResource;
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
    
    public function showUpdateform($id)
    {
        $post = \App\Post::find($id);
        return view('user.update',['post'=>$post]);
    }

    public function update(Request $request, $id)
    {
        $data_post = \App\Post::find($id);
        
        $data_post->title = $request->title;
        $data_post->content =$request->content;

        $data_post->save();

        return redirect('/user/index');

    }

    public function delete($id)
    {
        $data_post = \App\Post::find($id);
        $data_post->delete();
        return redirect('/user/index');
    }

    public function ListAllPost()
    {
       //return response()->json(\App\Post::all());
       $post = \App\Post::all();
       return PostResource::collection($post);
    }
}
