<?php

namespace App\Http\Requests\Review;

use Illuminate\Foundation\Http\FormRequest;

class UpdateReviewRequest extends FormRequest
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
            'rating' => 'required|numeric',
            'description' => 'required',
            'designation' => 'required',
            'title' => 'required',
            'image_file' => 'mimes:jpg,jpeg,svg,png',
        ];
    }
}
