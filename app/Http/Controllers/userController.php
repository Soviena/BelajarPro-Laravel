<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\member;
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

    public function dashboard(){
        return view('Dashboard');
    }
    
    public function daftar(){
        if (session('loggedin',FALSE)) return redirect()->route('komunitas')->with('ilegal','Already Logged in');
        return view('daftar');
    }

    public function addUser(Request $request){
        $u = DB::table('members')->where('email',$request->email)->first();
        if($u) return redirect()->route('daftar')->with('email-exist','email must be unique');
        if($request->password != $request->password1) return redirect()->route('daftar')->with('password-not-match','please try again');
        $user = new member;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('masuk')->with('regist-success','Berhasil daftar');
    }

    public function masuk(Request $request){
        $u = DB::table('members')->where('name',$request->name)->first();
        // $as = "allo";
        // error_log($as);
        $a = $request->password;
        error_log("$a");
        // error_log(print("$u->id"));
        if ($u && $u->password == $request->password) {
        // if (1==2) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['name' => $u->name]);
            session(['email' => $u->email]);
            session(['admin' => $u->admin]);
            if($request->remember){
                Cookie::queue('name',$u->name,1440);
                Cookie::queue('password',$u->password,1440);
                Cookie::queue('remember',TRUE,1440);
            }
            return redirect()->route('komunitas')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('masuk')->with('login-failed','Password atau email salah');
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->route('masuk')->with('logout-success','Berhasil logout');
    }
}
