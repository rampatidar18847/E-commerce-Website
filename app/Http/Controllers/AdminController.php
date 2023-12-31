<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;

class adminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function makeLogin(Request $request)
    {
        $data = array(
            'email' => $request->email,
            'password' => $request->password,
            'role' => 'admin'
        );

        if(Auth::attempt($data))
        {
            return view('admin.dashboard');
        }else
        {
            return back()->withErrors(['message' => 'Invalid email or password']);
        }


    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
