<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class LoginClientController extends Controller
{
    protected $redirectTo = 'home';

    // public function __construct()
    // {
    //         $this->middleware('guest:customer')->except('logout');
    // }



    public function showLoginForm()
    {
        return view('client.modules.login.login',['url' => 'client.login',]);
    }

    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'email'    => 'required|email|min:5|max:191',
            'password' => 'required|string|min:4|max:255',
        ];

        //custom validation error messages.
        $messages = [
            'email.required' => 'Write EMail',
        ];

        //validate the request.
        $request->validate($rules,$messages);
    }


    public function customerlogin(Request $request){
        $this->validator($request);

        if (Auth::guard('customers')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }
        return back()->withInput($request->only('email', 'remember'));
    }
    public function logout()
    {
    Auth::guard('customers')->logout();
    return redirect()->route('client.login');
    }

}