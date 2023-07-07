<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddTeam extends FormRequest
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
            'services'=>'required',
            'member_image'=>'required',
            'post'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Enter Name',
            'services.required'=>'Enter Services',
            'member_image.required'=>'Select Image',
            'post.required'=>'Enter Post',
        ];
    }
}
