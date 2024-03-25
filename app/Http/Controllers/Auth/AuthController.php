<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;
use App\Models\Faculty;
use App\Models\Member;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function loginform(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);

        $email = $request->email;
        $password = $request->password;

        if ($request->type == 'admin') {
            Auth::guard('member')->logout();
            if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password])) {
                Session::flash('success', 'Login Successful');
                return redirect()->route('Dashboard');
            }
            return "afds";
        }

        $data = $request->only(['email', 'password']);
        $user = Member::where('email', $request->email)->first();

        if ($user->status != 'active') {
            return back()->with(['message' => 'You are not active, contact with administrator', 'alert' => 'danger']);
        }

        if (Auth::guard('member')->attempt(['email' => $email, 'password' => $password])) {
            Session::flash('success', 'Login Successful');
            return redirect()->route('Dashboard');
        }
        
        // faculty
        $data = $request->only(['email', 'password']);
        $faculty = Faculty::where('email', $request->email)->first();

        // if ($faculty->status != 'active') {
        //     return back()->with(['message' => 'You are not active, contact with administrator', 'alert' => 'danger']);
        // }
        if ($request->type == 'faculty') {
            Auth::guard('member')->logout();
            if (Auth::guard('faculty')->attempt(['email' => $email, 'password' => $password])) {
                Session::flash('success', 'Login Successful');
                return redirect()->route('Dashboard');
            }
            return "afds";
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
