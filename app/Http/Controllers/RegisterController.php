<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function Index(){
        return view('auth.register');
    }
    public function Register(Request $request){
        try {
            $request['password'] = bcrypt($request->password);
            $user = User::create($request->all());
            $image = $request->image;
            $destination = 'images/user_profile';
            if ($request->hasFile('image')) {
                $filename = strtolower(
                    pathinfo($image->getClientOriginalName(), PATHINFO_FILENAME)
                    . '-'
                    . uniqid()
                    . '.'
                    . $image->getClientOriginalExtension()
                );
                str_replace(" ", "-", $filename);
                $image->move($destination, $filename);
                $user->image = $filename;
                $user->save();
            }

        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
        Session::flash('success', 'User created successfully!');
        return back()->withInput();
    }
}
