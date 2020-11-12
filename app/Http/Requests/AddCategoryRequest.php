<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddCategoryRequest extends FormRequest
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
            'name'=>'required|max:255|unique:categories',
            'description'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Chưa nhập tên',
            'name.max'=>'Tên vượt quá ký tự cho phép',
            'name.unique'=>'Tên đã tồn tại',
            'description.required'=>'Chưa nhập miêu tả',
        ];
    }
}
