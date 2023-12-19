<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
         return [
            'name'=>'required',
            'cost'=>'required|regex:/^[1-9][0-9]+/',
            'category'=>'required',
            'description'=>'required|between:10,3000',
            'image'=>'required|image|mimes:jpg,png,jpeg,gif,svg',
         ];
    }
    public function messages()
    {
         return [
           

            'name.required' => 'هذا الحقل مطلوب',
            'cost.required' => ' حقل السعر مطلوب',
            'cost.regex' => ' يجب ان يكون السعر ارقام',

            

            ];
    }
}
