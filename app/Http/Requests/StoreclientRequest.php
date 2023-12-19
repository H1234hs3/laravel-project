<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreclientRequest extends FormRequest
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
            'email'=>'required|email|unique:clients',
            'phone'=>'required|regex:/^[1-9][0-9]+/|digits:9|starts_with:77,73,71,70,78',
            'job'=>'required|between:3,15',
            'description'=>'required|between:10,3000',
            
         ];
    }
    public function messages()
    {
         return [
           

            // 'phone.required' => 'هذا الحقل مطلوب',

            

            ];
    }
}
