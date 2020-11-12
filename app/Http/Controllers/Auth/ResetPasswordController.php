<?php

namespace App\Http\Controllers\Auth;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\RequestResetPassword;
use Illuminate\Http\Request;
use Ramsey\Uuid\Math\RoundingMode;

class ResetPasswordController extends Controller
{
    public function ResetPassword(Request $request){
        $code=$request->code;
        $email=$request->email;
        $checkUser=User::Where([ 
            'email'=>$email,
            'code'=>$code,
        ])->first();
        if(!$checkUser)
        {
            return redirect('/')->with('danger','Xin lỗi bạn đường dẫn không đúng.Bạn vui lòng thử lại.');
        }
        return view('cms.modules.ResetPassword');
    }
    public function SaveResetPassword(RequestResetPassword $requestResetPassword){
        if($requestResetPassword->password){
            $code=$requestResetPassword->code;
            $email=$requestResetPassword->email;
            $checkUser=User::Where([
            'email'=>$email,
            'code'=>$code,
        ])->first();
        if(!$checkUser)
        {
            return redirect('/')->back()->with('danger','Xin lỗi bạn đường dẫn không đúng.Bạn vui lòng thử lại.')->withInput();
        }
            $checkUser->password=bcrypt($requestResetPassword->password);
            
            $checkUser->save();
            return redirect()->route('login')->with('notification','Thay đổi mật khẩu thành công.Vui lòng đăng nhập lại!!!')->withInput();

        }
    }
}