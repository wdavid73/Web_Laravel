<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest' ,['only' => 'showLoginForm'])->except('logout');
    }

    public function credentials(Request $request){
        $login = $request->input($this->email());

        $field = filter_var($login , FILTER_VALIDATE_EMAIL) ? 'email' : '';

        return [
            $field => $login,
            'password' => $request->input('password')
        ];
    }

    public function email(){
        return 'email';
    }

    public function login(){
        $credentials = $this->validate(request() , [
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);
        if( Auth::attempt($credentials) ){
            return redirect()->route('home');

        }else{

            return back()->withErrors(['email' => trans('auth.failed')])->withInput(request(['email']));
        }
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

}
