<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
// use App\Http\Request;
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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm(){
        return view('login');
    }



    public function login(Request $request)
        {
            // var_dump($request);
            return $request->all();
            // $credentials = $this->validate(request(), [
            // 'email' => 'required|email|string',
            // 'password' => 'required|string'
            // ]);

            // if (Auth::attempt($credentials)) {

            //     return redirect('options');
            // }else{
            //     return redirect('/');
            // }
        }

        public function logout()
        {
            Auth::logout();
            return redirect('/');
        }


}
