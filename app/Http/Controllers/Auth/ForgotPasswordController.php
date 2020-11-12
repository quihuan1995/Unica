<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Mail;

class ForgotPasswordController extends Controller
{
    public function forgot(){
     return view('cms.modules.forgot');
  }
   
    public function password(Request $request){
      // dd($request->all());
        $email=$request->email;
       $checkUser= User::where('email',$email)->first();
       if(!$checkUser){
         return redirect()->back()->with('danger','Email không tồn tại')->withInput();
       }
      $code=bcrypt(md5(time().$email));
      $checkUser->code=$code;
       $checkUser->save();

       $url=route('cms.ResetPassword',['code'=>$checkUser->code,'email'=>$email]);
       $data=[
         'route'=>$url
       ];
       
      Mail::send('email.reset_password',$data, function($message) use($email){
        $message->to($email, 'Visitor')->subject('Lấy lại mật khẩu!');
      });
      return redirect('/forgot')->with('success','Vui lòng kiểm tra hòm thư điện tử của bạn@@@ ')->withInput();
       
    }
    

    
}   