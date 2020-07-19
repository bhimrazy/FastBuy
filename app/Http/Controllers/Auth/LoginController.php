<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    //protected $redirectTo = RouteServiceProvider::HOME;
     protected function authenticated(Request $request, $user)
     {
         if(session()->has('oldUrl')){
             $url=session()->get('oldUrl');
             return redirect()->route($url);
         }
         elseif($user->isAdmin()){
             auth()->logout();
             return redirect()->route('admin-login');
         }
         else{
             return redirect()->route('my-account');
         }
     }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
