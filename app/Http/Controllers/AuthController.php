<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }
    function loginPost(Request $request){
        $request->validate([
            "email" =>"required",
            "password" =>"required",
        ]);
        $credentials = $request->only("email","password");
        if (Auth::attempt($credentials)){
            // return 'dax login' ;
            return redirect()->intended(route("home"));
        }
        // return 'dang loiu'; 
        return redirect(route("login"))->with("error","login failed");
    }
    function register(){
        return view("auth.register");
    }
    function registerPost(Request $request){
        $request->validate([
            "fullname" =>"required",
            "email" =>"required|email",
            "password" =>"required|min:6",
        ]);
        $user = new User();
        $user->name = $request->fullname;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($user->save()){
            return redirect(route("login"))->with("success","User created successfully");
        }
        return redirect("register")->with("error","Faile to create account");
    }
}
