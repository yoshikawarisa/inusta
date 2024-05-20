<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name' => 'required',
            'Email' => 'required',
            'password' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'name.required' => ':attribute の入力をお願いします',
            'Email.required' => ':attribute の入力をお願いします',
            'password.required' => ':attribute の入力をお願いします',
        ];
    }
}   