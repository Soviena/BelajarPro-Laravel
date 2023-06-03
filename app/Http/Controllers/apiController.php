<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;
use App\Models\article;



class apiController extends Controller{
    public function getAllCourse(){
        $allCourse = course::all();
        return response()->json($allCourse);
    }

    public function getArticles($courseId){
        $articles = course::find($courseId)->articles()->get();
        return response()->json($articles);
    }

}
