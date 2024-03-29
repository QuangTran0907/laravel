<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('Auth.register');
    }
    public function register(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = 0;
        $user->save();

        return redirect()->action([AuthController::class, 'showLogin']);
    }
    public function showLogin()
    {
        $message = '';
        return view('Auth.login',compact('message'));
    }
    public function login(Request $request)
    {
        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->action([WebController::class, 'web_index']);

        }
        else 
        $message = 'Wrong iformation';
        return view('Auth.login',compact('message'));
    }
    public function logout()
    {
       Auth::logout();
       return redirect()->action([WebController::class, 'web_index']);

    }

    public function showProfile()
    {
        return view('Auth.register');
    }

}
