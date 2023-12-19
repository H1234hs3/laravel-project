<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorecategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
         return [
            'image'=>'required',
            'project'=>'required',

            'title'=>'required|between:3,150',
            'userName'=>'required|between:3,15',
            'description'=>'required|between:10,3000',
         ];
    }
    public function messages()
    {
         return [
            'image' => __('validation.required'),

            'project.required' => __('validation.required'),

            'userName.required'=>__('validation.required'),
            'userName.between'=>__('validation.between'),
            'title.required'=>__('validation.required'),
            'title.between'=>__('validation.between'),
            'description.required'=>__('validation.required'),
            'description.between'=>__('validation.between'),

            ];
    }
}
