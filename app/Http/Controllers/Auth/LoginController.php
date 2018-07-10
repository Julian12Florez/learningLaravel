<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

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

    // use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->only('showLoginForm');
    }

    public function showLoginForm(){
        return view('login');
    }



    public function login()
        {
            // return "INGRESO AL LOGIN";
            $credentials = $this->validate(request(), [
            'email' => 'required|email|string',
            'password' => 'required|string'
            ]);

            if (Auth::attempt($credentials)) {
                return redirect('options');
            }else{
                return redirect('/');
            }
        }

        public function logout()
        {
            // return "hola";
            Auth::logout();
            return redirect('/');
        }


}
