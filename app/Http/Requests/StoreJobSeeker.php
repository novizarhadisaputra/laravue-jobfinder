<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJobSeeker extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required|confirmed|min:8',
            'provinces_id' => 'required',
            'cities_id' => 'required',
            'districts_id' => 'required',
            'subdistricts_id' => 'required',
            'address' => 'required',
            'skills' => 'required',
            'identity' => 'required',
            'number_identity' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Field email is required!',
            'name.required' => 'Field name is required!',
            'password.required' => 'Field password is required!',
            'password.min' => 'Field password minimal 8 character',
            'provinces_id.required' => 'Field provinces is required!',
            'cities_id.required' => 'Field cities is required!',
            'districts_id.required' => 'Field districts is required!',
            'subdistricts_id.required' => 'Field subdistricts is required!',
            'address.required' => 'Field address is required',
            'skills.required' => 'Field skill is required',
            'identity.required' => 'Field identity is required',
            'number_identity.required' => 'Field number identity is required!',
        ];
    }
}
