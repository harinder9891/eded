<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreBootcampRequest extends FormRequest
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
            'bootcamp_image.*' => 'mimes:jpg,jpeg,svg,png',
            'candidate_gallery_image.*' => 'mimes:jpg,jpeg,svg,png',
            'bootcamp_title' => 'required',
            'bootcamp_description' => 'required',
            'exam_information' => 'required',
            'benefits' => 'required',
        ];
    }
}
