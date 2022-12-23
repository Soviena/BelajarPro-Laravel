<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\member;

class adminController extends Controller
{
    public function course()
    {
        return view('Admin-Panel-Course');
    }
    public function user()
    {
        $member = member::all();

        return view('Admin-Panel-User', compact("member"));
    }

    public function edit_user(Request $request)
    {
        $member = member::find($request->id);
        $member->email=$request->email;
        if ($request->password != '') {
            $member->password = $request->password;
        }
        $member->save();
        
        return redirect()->route('admin-user');
    }

    public function delete_user($id)
    {
        $member = member::find($id);
        $member->delete();
        
        return redirect()->route('admin-user');
    }
    
}
