<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditTagRequest extends FormRequest
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
            'title'=>'required|max:255|unique:tags,title,'.$this->id,
            // 'slug'=>'required|max:255|unique:tags,slug,'.$this->id,
        ];
    }
    public function messages(){
        return [
            'title.required'=>'Không được để trống',
            'title.max'=>'Tiêu đề quá dài',
            'title.unique'=>'Trùng tiêu đề',
            // 'slug.required'=>'Không được để trống',
            // 'slug.max'=>'Slug quá dài',
            // 'slug.unique'=>'Trùng slug',
        ];
    }
}
