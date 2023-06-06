<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('dashboard.auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->input("email"), 'password' => $request->input("password")])) {

            return redirect()->route('admin.dashboard')->with(['success'=>'Login successfully']);
        }

       return Redirect()->route('show.admin.login')->with(['error'=>'Error In Data']);
    }
}
