<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use App\Models\course;
use App\Models\member;
class CourseController extends Controller
{
    public function index(){
        $mycourses = member::find(session('uid'))->courses()->get();
        $course = course::all();
        return view('course', compact("mycourses","course"));
    }

    public function article($idc)
    {
        $course = course::find($idc);
        return view('article', compact("course"));
    }

    public function addToMyCourse($idc){
        $member = member::find(session('uid'));
        $member->courses()->attach($idc);
        return redirect()->route('course');
    }

    public function myCourse(){
        $mycourses = member::find(session('uid'))->courses()->get();
        return view('mycourse', compact('mycourses'));
    }    

    public function deleteMyCourse($idc){
        $member = member::find(session('uid'));
        $member->courses()->detach($idc);
        return redirect()->route('myCourse');        
    }

}
