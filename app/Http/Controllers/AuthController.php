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
    public function show($id)
    {
        $newsData = [
            1 => ['title' => 'Ngô bật ngược tăng mạnh', 'content' => 'Giá ngô tăng mạnh...', 'date' => '07-03-2025'],
            2 => ['title' => 'Giá dầu đi ngang', 'content' => 'Giá dầu ổn định...', 'date' => '06-03-2025'],
            3 => ['title' => 'Giá đường hồi phục nhẹ', 'content' => 'Giá đường tăng trở lại...', 'date' => '05-03-2025'],
        ];

        if (!array_key_exists($id, $newsData)) {
            abort(404); 
        }

        return view('news-detail', ['news' => $newsData[$id]]);
    }
    public function logout(Request $request)
    {
        Auth::logout(); // Đăng xuất người dùng
    
        $request->session()->invalidate(); // Xóa session hiện tại
        $request->session()->regenerateToken(); // Tạo CSRF token mới
    
        return redirect('/login')->with('message', 'Bạn đã đăng xuất thành công.');
    }
    
}
