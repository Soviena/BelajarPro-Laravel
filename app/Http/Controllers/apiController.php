<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\member;
use App\Models\article;


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
    public function login(Request $request){
        $u = DB::table('members')->where('email',$request->email)->first();
        if(!$u){
            $data = [
                'msg' => "Email tidak terdaftar",
                'email' => $request->email
            ];
            return response()->json($data);
            
        }else if ($u->password == $request->password) {
            $data = [
                'loggedin' => TRUE,
                'uid' => $u->id,
                'email' => $u->email,
                'admin' => $u->admin,
                'profilePic' => $u->profilePic
            ];
            return response()->json($data);
        }else{
            $data = [
                'msg' => "Maaf, Password yang dimasukkan salah!.",
                'email' => $request->email
            ];            
            return response()->json($data);
        }
    }


}
