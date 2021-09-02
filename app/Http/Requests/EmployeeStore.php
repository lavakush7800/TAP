<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeStore extends FormRequest
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
            'image' => 'required',
            'name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'address' => 'required',
        ];
    }
    public function messages(){
        return[
            'image.required' => 'Image is required',
            'name.required' => 'Name is required',
            'email.required' => 'Email is required',
            'mobile.required' => 'Mobile is required',
            'address.required' => 'Address is required',
        ];
    }
}
