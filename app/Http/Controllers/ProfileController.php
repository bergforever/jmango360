<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //constructor
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function Profile()
    {
        return view('backend.admin.profile');
    }

    public function ProfilePost(Request $request)
    {
//        dd(auth()->user()->id);

        try {
            $user = User::findOrFail(auth()->user()->id);
            $user->name = $request->input('name');
            $destination = 'images/user_profile';
            $user_image = $request->image;
            if ($request->hasFile('image')) {
                //dd($user_image);
                $filename = strtolower(
                    pathinfo($user_image->getClientOriginalName(), PATHINFO_FILENAME)
                    .'-'
                    .uniqid()
                    .'.'
                    .$user_image->getClientOriginalExtension()
                );
                str_replace(' ', '-', $filename);
                $user_image->move($destination, $filename);
                $image_path = public_path().'/images/user_profile/'.$user->image;
                if (file_exists($image_path)) {
                    unlink($image_path);
                }
                $user->image = $filename;
                $user->save();
            }
            $user->save();

            return redirect()->back()->with('success', 'update profile ');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
