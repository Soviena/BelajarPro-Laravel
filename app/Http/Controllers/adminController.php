<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;
use App\Models\course;
use App\Models\article;

use Illuminate\Support\Facades\Storage;


class adminController extends Controller
{
    public function index(){
        if(!session('admin',FALSE) == "TRUE") return redirect()->route('home');
        return redirect()->route('admin-course');
    }

    public function course()
    {
        if(!session('admin',FALSE) == "TRUE") return redirect()->route('home');
        $course = course::all();
        return view('Admin-Panel-Course', compact("course"));
    }
    public function user()
    {
        if(!session('admin',FALSE) == "TRUE") return redirect()->route('home');
        $member = member::all();
        return view('Admin-Panel-User', compact("member"));
    }

    public function article()
    {
        if(!session('admin',FALSE) == "TRUE") return redirect()->route('home');
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
        if($request->hasfile('img')){
            Storage::delete('public/uploaded/Course/'.$course->image);
            $gallerypic = $request->file('img');
            $gallerypic->storeAs('public/uploaded/Course/',$gallerypic->hashName());
            $course->img = $gallerypic->hashName();
        }

        
        $course->save();
        
        return redirect()->route('admin-course');
    }

    public function add_course(Request $request)
    {
        $course = new course;
        $course->name=$request->name;
        $course->deskripsi=$request->deskripsi;
        if($request->hasfile('img')){
            $gallerypic = $request->file('img');
            $gallerypic->storeAs('public/uploaded/Course/',$gallerypic->hashName());
            $course->img = $gallerypic->hashName();
        }

        $course->save();
        
        return redirect()->route('admin-course');
    }

    public function delete_course($id)
    {
        $course = course::find($id);
        Storage::delete('public/uploaded/Course/'.$course->image);
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
