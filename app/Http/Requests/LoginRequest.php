<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
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
                "name" => ['required', 'alpha', 'min:6','max:10'],
                "email"=> ['required','email'],   
                "password"=> "required"
        ];
    }

    public function messages(){
        return [
            'name.required'=>'The user name field is required!',
            'name.alpha'=>'Username should be contained only letter, please',
            'email.email'=>'hello this is not an email',
        ];
    }
}
