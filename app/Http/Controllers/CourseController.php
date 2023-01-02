<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\article;
use App\Models\course;
class CourseController extends Controller
{
    public function index(){
        $course = course::all();
        return view('course', compact("course"));
    }

    public function article()
    {
        $article = article::all();
        return view('article', compact("article"));
    }
}
