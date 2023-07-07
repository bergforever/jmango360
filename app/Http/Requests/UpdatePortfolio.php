<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePortfolio extends FormRequest
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
            'project_title'=>'required',
            'category_id'=>'required',
        ];
    }
    public function messages()
    {
        return [
            'project_title.required'=>'Enter Project Title',
            'category_id.required'=>'Select Category',
        ];
    }
}
