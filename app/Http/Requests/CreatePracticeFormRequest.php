<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePracticeFormRequest extends FormRequest
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
            'name' => 'required|unique:quiz_test,name'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên bài thi không được để trống',
            'name.unique' => 'Tên bài thi đã tồn tại',
        ];
    }
}
