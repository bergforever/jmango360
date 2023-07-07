<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',
            'image'=>'required',
        ];
    }
    //coustom error messages
    public function messages()
    {
        return [
            'name.required'=>'Name is required',
            'email.required'=>'Email is required',
            'password.required'=>'Password is required',
            'image.required'=>'Image is required',
        ];
    }
}
