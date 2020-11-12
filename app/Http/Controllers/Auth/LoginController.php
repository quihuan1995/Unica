<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('cms.login');
    }

    public function postlogin(LoginRequest $request){
        $email = $request->email;
        $password = $request->password;

        if( Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('/cms/dashboard')->with('success','Đăng nhập thành công');
        }else{
            return redirect('/login')->with('notification','Email hoặc mật khẩu không đúng')->withInput();
        }
    }
}