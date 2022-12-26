<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;

class userController extends Controller
{
    public function index(Request $request)
    {
        if (session('loggedin',FALSE)) return redirect()->route('komunitas')->with('ilegal','Already Logged in');
        $remember = $request->cookie('remember');
        if($remember){
            $data = [
                "email" => $request->cookie('email'),
                "password" => $request->cookie('password'),
                "remember" => $remember
            ];
        }else{
            $data = [
                "remember" => FALSE
            ];
        }
        return view('masuk',compact('data'));
    }
    
    public function daftar(){
        if (session('loggedin',FALSE)) return redirect()->route('komunitas')->with('ilegal','Already Logged in');
        return view('daftar');
    }

    public function masuk(Request $request){
        $u = DB::table('users')->where('name',$request->name)->first();
        // $as = "s";
        // error_log($u);
        // error_log(print("$u->name"));
        if ($u->password == $request->password) {
        // if (1==1) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['name' => $u->name]);
            // session(['email' => $u->email]);
            // session(['admin' => $u->admin]);
            if($request->remember){
                Cookie::queue('name',$u->name,1440);
                Cookie::queue('password',$u->password,1440);
                Cookie::queue('remember',TRUE,1440);
            }
            return redirect()->route('submit')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('daftar')->with('login-failed','Password atau email salah');
        }
    }
}
