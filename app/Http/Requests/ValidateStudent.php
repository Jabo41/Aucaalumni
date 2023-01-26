<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateStudent extends FormRequest
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
            'id_number' => [
                'required', 'integer', 'unique:students,id_number', 'digits_between:5,6',
                'exists:students,id_number'
            ],
            'first_name'=>'required',
            'last_name'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'id_number.unique' => 'This student id has already registered',
            'id_number.exists' => 'Invalid student id provided.',
        ];
    }
}
