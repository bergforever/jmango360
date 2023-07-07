<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function Index(){
        return view('auth.login');
    }
    public function Admin_login(Request $request){
        $request->validate([
            'email' => 'required|email|max:191',
            'password' => 'required|string|max:191',
        ]);
        try {
            if ($user = User::where('email', $request->email)->where('role', 'admin')->first()) {
                if (!$user) {
                    $alert['type'] = 'danger';
                    $alert['heading'] = 'login failed';
                    $alert['message'] = 'Invalid Email or Password';
                    return redirect()->back()->with('alert', $alert);
                }
                if (!auth()->loginUsingId((password_verify($request->password, $user->password)) ? $user->id : 0)) {
                    $alert['type'] = 'danger';
                    $alert['heading'] = 'login failed';
                    $alert['message'] = 'Invalid  password';
                    return redirect()->back()->with('alert', $alert);
                }
                if (auth()->check() and auth()->user()->role === 'admin')
                    return redirect('/admin');
            }
            elseif($user = User::where('email', $request->email)->where('role', 'client')->first()) {
                if (!$user) {
                    $alert['type'] = 'danger';
                    $alert['heading'] = 'login failed';
                    $alert['message'] = 'Invalid Email or Password';
                    return redirect()->back()->with('alert', $alert);
                }
                if (!auth()->loginUsingId((password_verify($request->password, $user->password)) ? $user->id : 0)) {
                    $alert['type'] = 'danger';
                    $alert['heading'] = 'login failed';
                    $alert['message'] = 'Invalid  password';
                    return redirect()->back()->with('alert', $alert);
                }
                if (auth()->check() and auth()->user()->role === 'client')
                    return redirect('/client');
            }

            else {
                if (!$user) {
                    $alert['type'] = 'danger';
                    $alert['heading'] = 'login failed';
                    $alert['message'] = 'Login Failed Please Try Again letter';
                    return redirect()->back()->with('alert', $alert);
                }
            }
        }catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function logout()
    {

        if (auth()->check()){
            if(auth()->user()->role === 'admin'){
                auth()->logout();
                return redirect('/');
            }
            elseif(auth()->user()->role === 'client'){
                auth()->logout();
                return redirect('/');
            }
//            elseif(auth()->user()->type === 'merchant'){
//                auth()->logout();
//                return redirect('/');
//            }
        }
        else{
            return redirect('/');
        }
    }
}
