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
}
