<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\course;
use App\Models\article;

class adminController extends Controller
{
    public function course()
    {
        $course = course::all();
        return view('Admin-Panel-Course', compact("course"));
    }
    public function user()
    {
        $member = member::all();

        return view('Admin-Panel-User', compact("member"));
    }

    public function article()
    {
        $article = article::all();
        return view('Admin-Panel-Article', compact("article"));
    }

    public function edit_user(Request $request)
    {
        $member = member::find($request->id);
        $member->email=$request->email;
        if ($request->password != '') {
            $member->password = $request->password;
        }
        $member->save();
        
        return redirect()->route('admin-user');
    }

    public function delete_user($id)
    {
        $member = member::find($id);
        $member->delete();
        
        return redirect()->route('admin-user');
    }

    public function edit_article(Request $request)
    {
        $article = article::find($request->id);
        $article->chapter=$request->chapter;
        $article->deskripsi=$request->deskripsi;
        
        $article->save();
        
        return redirect()->route('admin-article');
    }

    public function edit_course(Request $request)
    {
        $course = course::find($request->id);
        $course->name=$request->name;
        $course->deskripsi=$request->deskripsi;
        $course->img=$request->img;
        
        $course->save();
        
        return redirect()->route('admin-course');
    }

    public function add_course(Request $request)
    {
        $course = new course;
        $course->name=$request->name;
        $course->deskripsi=$request->deskripsi;
        $course->img=$request->img;

        $course->save();
        
        return redirect()->route('admin-course');
    }

    public function delete_course($id)
    {
        $course = course::find($id);
        $course->delete();
        
        return redirect()->route('admin-course');
    }

    public function delete_chapter($id)
    {
        $article = article::find($id);
        $article->delete();
        
        return redirect()->route('admin-article');
    }
    
}
