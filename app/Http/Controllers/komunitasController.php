<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class komunitasController extends Controller
{
    public function index()
    {
        return view('komunitas');
    }
}
