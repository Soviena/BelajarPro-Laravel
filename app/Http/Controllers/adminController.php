<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function course()
    {
        return view('Admin-Panel-Course');
    }
    public function user()
    {
        return view('Admin-Panel-User');
    }
    
}
