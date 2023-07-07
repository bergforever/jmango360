<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'message'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Enter Your Name',
            'email.required'=>'Enter Your Email',
            'email.email' => 'Enter a valid email address',
            'subject.required'=>'Select Subject',
            'message.required'=>'Enter Your Message Message',
        ];
    }
}
