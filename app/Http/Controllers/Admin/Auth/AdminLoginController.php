<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AdminLoginController extends Controller
{
    public function __construct()
    {   $this->middleware('throttle:3,2')->only('authenticate');
        $this->middleware('guest:admin')->except('logout');
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(LoginRequest $request)
    {   $credentials = $request->only('email', 'password');
        // Attempt to login as admin
        if (Auth::guard('admin')->attempt($credentials)) {
            // If successful then redirect to intended route or admin dashboard
         //dd(auth()->guard('admin')->user()->isAdmin());
            return redirect()->intended(route('admin.dashboard'));
        }
        // If unsuccessful then redirect back to login page with email and remember fields
        return redirect()->back()->withInput($request->only('email'))->withErrors('Failed to Login.Check your Credentials')->withErrors(trans('auth.failed'));
    }

    public function logout(Request $request)
    {
        Auth::guard('admin')->logout();
        return redirect('/');
    }
}
