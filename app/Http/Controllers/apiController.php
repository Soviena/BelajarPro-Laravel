<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\member;
use App\Models\article;
use App\Models\post;
use App\Models\comment;


use Illuminate\Support\Facades\DB;



class apiController extends Controller{
    public function getAllCourse(){
        $allCourse = course::all();
        return response()->json($allCourse);
    }
    public function getAllMember(Request $request)
    {
        $allMember = member::all();
        return response()->json($allMember);
    }

    public function getMemberById(Request $request)
    {
        $member = member::find($request->id);
        return response()->json($member);
    }

    public function getArticles($courseId){
        $articles = course::find($courseId)->articles()->get();
        return response()->json($articles);
    }

    public function getCourse($courseId){
        $course = course::find($courseId);
        return response()->json($course);
    }

    public function login(Request $request){
        $u = DB::table('members')->where('email',$request->email)->first();
        if(!$u){
            $data = [
                'msg' => "Email tidak terdaftar",
                'email' => $request->email
            ];
            return response()->json($data,400);
            
        }else if ($u->password == $request->password) {
            $data = [
                'loggedin' => TRUE,
                'uid' => $u->id,
                'email' => $u->email,
                'admin' => $u->admin,
                'name' => $u->name,
                'profilePic' => $u->profilePic
            ];
            return response()->json($data);
        }else{
            $data = [
                'msg' => "Maaf, Password yang dimasukkan salah!.",
                'email' => $request->email
            ];            
            return response()->json($data,400);
        }
    }

    public function daftar(Request $request){
        $u = DB::table('members')->where('email',$request->email)->first();
        $email = $request->email;
        $pw = $request->password;
        if($u){
            $data = [
                'msg1' => 'Maaf, Alamat Email sudah terdaftar, coba alamat email lain!.',
            ];
            return response()->json($data,400);
        }else if($pw != $request->password2) {
            $data = [
                'msg2' => 'Maaf, Konfirmasi password salah!',
            ];
            return response()->json($data,400);
        }
        
        $user = new member;
        $user->name = $request->name;
        $user->email = $email;
        $user->password = $request->password;
        $user->save();
        $data = [
            'msg' => "Berhasil daftar",
            'id' => $user->id,
            'email' => $email,            
        ];
        return response()->json($data);;
    }

    public function getAllPostandComment(){
        $posts = post::with('comments.members','members')->latest()->get();
        return response()->json($posts);
    }

    public function addPost(Request $request){
        $post = new post;
        $post->author_id = $request->uid;
        $post->title = $request->title;
        $post->deskripsi = $request->desc;
        $post->tags = $request->tags;
        $post->save();
        $data = [
            'msg' => 'berhasil',
            'value'=> 'true'
        ];
        return response()->json($data);
    }

    public function addComment(Request $request){
        $comment = new comment;
        $comment->post_id = $request->pid;
        $comment->author_id = $request->uid;
        $comment->comment = $request->comment;
        $comment->save();
        $data = [
            'msg' => 'berhasil',
            'value'=> 'true'
        ];
        return response()->json($data);
    }


}
