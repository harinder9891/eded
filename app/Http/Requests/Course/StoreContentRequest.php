<?php

namespace App\Http\Requests\Course;

use Illuminate\Foundation\Http\FormRequest;

class StoreContentRequest extends FormRequest
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
            'slider_image.*' => 'mimes:jpg,jpeg,svg,png',
            'course_overview_title' => 'required',
            'course_brief_description' => 'required',
            'syllabus_title' => 'required',
            'syllabus_file' => 'required|mimes:pdf',
            'syllabus_course_content' => 'required',
            'trainer_introduction' => 'required',
        ];
    }
}
