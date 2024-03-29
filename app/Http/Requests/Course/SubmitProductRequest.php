<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class SubmitProductRequest extends FormRequest
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
            'member_name' => 'required',
            'image' => 'required|mimes:jpg,jpeg,svg,png',
            'designation' => 'required',
            'about' => 'required',
          
        ];
    }
}
