<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Str;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|confirmed|min:8',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Field email is required!',
            'email.unique' => 'Email has registered!',
            'name.required' => 'Field name is required!',
            'password.required' => 'Field password is required!',
            'password.min' => 'Field password minimal 8 character',
        ];
    }
}
