<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\member;
use App\Models\course;


class userController extends Controller
{
    public function index(Request $request)
    {
        if (session('loggedin',FALSE)) return redirect()->route('home')->with('ilegal','Already Logged in');
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
        $courses = course::all();
        return view('Dashboard', compact('courses'));
    }
    
    public function daftar(){
        if (session('loggedin',FALSE)) return redirect()->route('home')->with('ilegal','Already Logged in');
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
        $u = DB::table('members')->where('email',$request->email)->first();
        $a = $request->password;
        error_log("$a");
        if ($u && $u->password == $request->password) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['email' => $u->email]);
            session(['admin' => $u->admin]);
            if($request->remember){
                Cookie::queue('email',$u->email,1);
                Cookie::queue('password',$u->password,1);
                Cookie::queue('remember',TRUE,1);
            }else{
                Cookie::queue('email','');
                Cookie::queue('password','');
                Cookie::queue('remember','');
            }
            return redirect()->route('home')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('masuk')->with('login-failed','Password atau email salah');
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->route('masuk')->with('logout-success','Berhasil logout');
    }

    //profil
    public function profil(Request $request){
        $u = DB::table('members')->where('email',session('email'))->first();
        return view('profil',compact('u'));
    }

    public function profil_edit(Request $request)
    {
        $member = member::find($request->id);
        $member->name=$request->name;
        $member->email=$request->email;
        $member->no_hp=$request->no_hp;
        $member->alamat=$request->alamat;
        $member->biography=$request->biography;
        if ($request->password != '') {
            $member->password = $request->password;
        }
        $member->save();
        return redirect()->route('profil');
    }
}