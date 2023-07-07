<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ResetPasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Index(){
        return view('auth.reset-password');
    }
    public function ResetPassword(Request $request){
//        $error=$request->validate([
//            'current_password'=>'required',
//            'password' => 'required|confirmed',
//        ]);
        //dd($error);
        $data = $request->all();
        $current_password = $data['current_password'];
        $check_password = User::find(auth()->user()->id);
        if (Hash::check($current_password, $check_password->password)) {
            $password = bcrypt($data['new_password']);
            $check_password->update(['password' => $password]);
            Session::flash('success','Password Updated Successfully!!');
            return redirect()->back();
        } else {
            Session::flash('error','Incorrect Current Password!!');
            return redirect()->back();
        }
        return redirect()->back();
    }
}
