<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateLatestNews extends FormRequest
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
            'photo'=>'required|mimes:jpeg,png,jpg,gif|image|size:1024',
            'title'=>'required',
            'date'=>'required',
            'description'=>'required',
        ];
    }
    function messages()
    {
        return[
          'photo.size'=>'Photo must not exceed 1MB'
        ];
    }
}
