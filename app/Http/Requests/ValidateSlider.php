<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateSlider extends FormRequest
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
            'photo'=>'required|max:1024|mimes:jpeg,png,jpg,gif',
        ];
    }
    function messages()
    {
        return [
            'photo.max'=>'Photo must not exceed 1MB'
        ];
    }
}
