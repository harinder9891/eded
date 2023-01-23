<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCourseRequest extends FormRequest
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
            'category_id' => 'required|integer',
            'product_title' => 'required',
            // 'product_image' => 'required|mimes:jpg,jpeg,svg,png',
            // 'slider_image.*' => 'mimes:jpg,jpeg,svg,png',
            'price' => 'required|integer',
            'ratings' => 'required|numeric',
            'product_description' => 'required',
            'product_details' => 'required',
        ];
    }
}
