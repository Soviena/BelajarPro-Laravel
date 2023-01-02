<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use App\Models\comment;


class komunitasController extends Controller
{
    public function index(){
        if (!session('loggedin',FALSE)) return redirect()->route('masuk')->with('ilegal','Login first');
        $posts = post::with('comments')->latest()->get();
        return view('komunitas', compact('posts'));
    }

    public function addPost(Request $request){
        $post = new post;
        $post->author_id = $request->uid;
        $post->title = $request->title;
        $post->deskripsi = $request->desc;
        $post->save();
        return redirect()->route('komunitas');
    }

    public function addComment(Request $request){
        $comment = new comment;
        $comment->post_id = $request->pid;
        $comment->author_id = $request->uid;
        $comment->comment = $request->comment;
        $comment->save();
        return redirect()->route('komunitas');
    }

}
