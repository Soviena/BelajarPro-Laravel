<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course;


class apiController extends Controller
{
    public function getAllCourse(Request $request)
    {
        $allCourse = course::all();
        return response()->json($allCourse);
    }

}
