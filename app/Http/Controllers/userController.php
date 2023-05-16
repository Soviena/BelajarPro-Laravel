<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Cookie;
use App\Models\member;
use App\Models\course;
use App\Models\article;


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
        $email = $request->email;
        $pw = $request->password;
        if($u){
            return redirect()->route('daftar')->with('daftar-failed',[
                'msg1' => 'Maaf, Alamat Email sudah terdaftar, coba alamat email lain!.',
                'msg2' => '',
                'email' => $email,
                'pw'=>''
            ]);
        }else if($pw != $request->password2) return redirect()->route('daftar')->with('daftar-failed',[
            'msg1' => '',
            'msg2' => 'Maaf, Konfirmasi password salah!',
            'email' => $email,
            'pw'=>$pw
        ]);
        $user = new member;
        $user->name = $request->name;
        $user->email = $email;
        $user->password = $request->password;
        $user->save();
        return redirect()->route('masuk')->with('regist-success','Berhasil daftar');
    }

    public function masuk(Request $request){
        $u = DB::table('members')->where('email',$request->email)->first();
        if(!$u){
            return redirect()->route('masuk')->with('login-failed',[
                'msg1' => 'Maaf, Alamat Email tidak terdaftar!.',
                'msg2' => '',
                'email' => $request->email
            ]);
        }   else if ($u->password == $request->password) {
            session(['loggedin' => TRUE]);
            session(['uid' => $u->id]);
            session(['email' => $u->email]);
            session(['admin' => $u->admin]);
            session(['profilePic' => $u->profilePic]);
            if($request->remember){
                Cookie::queue('email',$u->email,1440);
                Cookie::queue('password',$u->password,1440);
                Cookie::queue('remember',TRUE,1440);
            }else{
                Cookie::queue('email','');
                Cookie::queue('password','');
                Cookie::queue('remember','');
            }
            return redirect()->route('home')->with('login-success','Berhasil login');
        }else{
            return redirect()->route('masuk')->with('login-failed',[
                'msg' => '',
                'msg2' => 'Maaf, Password yang dimasukkan salah!.',
                'email' => $request->email
            ]);
        }
    }

    public function logout(Request $request){
        $request->session()->invalidate();
        return redirect()->route('masuk')->with('logout-success','Berhasil logout');
    }

    //profil
    public function profil(Request $request,$idu){
        $u = member::find($idu);
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
        if($request->hasfile('img')){
            $profilePic = $request->file('img');
            $nameFile = $profilePic->hashName();
            list($width, $height) = getimagesize($profilePic);
            $aspect_ratio = $width / $height;
            if ($aspect_ratio != 1) {
                $portrait = $aspect_ratio < 1;

                // This will check if the image is portrait or landscape and crop it square accordingly.
                $profilePic = imagecreatefromjpeg($request->file('img'));
                $profilePic = imagecrop($profilePic, [
                    "x" => $portrait ? 0 : (($width - $height) / 2),
                    "y" => $portrait ? (($width - $height) / 2) : 0,
                    "width"  => $portrait ? $width : $height,
                    "height" => $portrait ? $width : $height
                ]);                            
            };
            imagejpeg($profilePic, storage_path('app/public/uploaded/profile/') . $nameFile, 90);
            $member->profilePic = $nameFile;
        }
        $member->save();
        return redirect()->route('profil',$request->id);
    }

    public function quiz(Request $request){
        return view('quiz');
    }

    public function search(Request $request){
        $query = request()->input('query');
        $user = member::where('name','like','%'.$query.'%')->get();
        $course = course::where('name','like','%'.$query.'%')->get();
        $article = article::where('chapter','like','%'.$query.'%')->get();
        $data = [
            "users" => $user,
            "courses" => $course,
            "articles" => $article
        ];
        return view('searchIndex',compact('data'));
    }

}