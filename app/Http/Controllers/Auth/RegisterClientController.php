<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Customer;
use Illuminate\Http\Request;

class RegisterClientController extends Controller
{
    protected $redirectTo = 'home';

    public function registerForm(){
        return view('client.modules.login.registered',['url' => 'client.register']);
    }

    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'full_name' => 'required|string|max:255',
    //         'email' => 'required|string|email|max:255|unique:customers',
    //         'password' => 'required|string|min:6|confirmed',
    //     ]);
    // }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'full_name' => 'required|string|max:255',
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
    protected function create(Request $request)
    {
        $this->validator($request);
        Customer::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone'=>$request->phone,
            'avatar'=>'',
            'address'=>json_encode(['city'=>'','streetAddress'=>'' ]),
            'birthday'=>'',
            'gender'=>'others'

        ]);
        return redirect()->intended('/');
    }

}