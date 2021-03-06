<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddOrderRequest extends FormRequest
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
            'full_name'=>'required|max:255',
            'city'=>'required',
            'streetAddress'=>'required',
            'email'=>'required',
            'phone'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'full_name.required'=>'Chưa nhập tên',
            'city.required'=>'Chưa nhập thành phố',
            'streetAddress.required'=>'Chưa nhập địa chỉ',
            'email.required'=>'Chưa nhập email',
            'email.unique'=>'Email đã tồn tại',
            'phone.required'=>'Chưa nhập số điện thoại',
            'full_name.max'=>'Tên vượt quá ký tự cho phép',
        ];
    }
}