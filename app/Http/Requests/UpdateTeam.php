<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeam extends FormRequest
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
            'post'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'name.required'=>'Enter Name',
            'services.required'=>'Enter Services',
            'post.required'=>'Enter Post',
        ];
    }
}
