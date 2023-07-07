<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPassword extends FormRequest
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
            'current_password'=>'required',
            'new_password' => 'required',
            'confirm_password' => 'required|same:new_password',
        ];
    }
    //coustom error messages
    public function messages()
    {
        return [
            'current_password.required'=>'required',
            'new_password.required'=>'required',
            'confirm_password.required'=>'not match',
        ];
    }
}
