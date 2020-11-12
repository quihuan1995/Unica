<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'full_name'=> 'required|max:50',
            'email'=> 'required|max:255|email|unique:users',
            'password'=> 'required|min:6',
            'phone'=>'numeric',
            'avatar'=>'image'
        ];
    }
    public function messages()
    {
        return [
            'email.unique' => 'Email đã tồn tại',
            'email.required' => 'Vui lòng nhập email',
            'email.max' => 'Không được vượt quá 255 kí tự',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập password',
            'password.min' => 'Password không được nhỏ hơn 6 kí tự',
            'full_name.required' => 'Vui lòng nhập tên',
            'full_name.max' => 'Không được vượt quá 255 kí tự',
            'phone.numeric'=>'Số điện thoại nhập không chính xác',
            'avatar.image'=>'Vui lòng chọn đúng định dạng ảnh'
        ];
    }

}
