<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreArticle extends FormRequest
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
            'title' => 'required',
            'image' => 'required|mimes:png,jpg,jpeg',
            'content' => 'required',
            'articles_types_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Field title is required!',
            'image.required' => 'Field image is required!',
            'image.mimes' => 'Format image png, jpg, jpeg',
            'content.required' => 'Field content is required!',
            'articles_types_id' => 'Field article type is required'
        ];
    }
}
