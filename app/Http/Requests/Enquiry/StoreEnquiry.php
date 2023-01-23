<?php

namespace App\Http\Requests\Enquiry;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnquiry extends FormRequest
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
            'name' => 'required',
            'contact_no' => 'required|digits:10',
            'email' => 'required|email',
            'product_id' => 'required',
            'address' => 'required',
        ];
    }

    public function messages()
{
    return [
        'product_id.product_id' => "Product field is required",
    ];
}
}
