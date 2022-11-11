<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidatePersonalInformation extends FormRequest
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
            'photo'=>'required',
            'email'=>'required',
            'faculty'=>'required',
            'phone_number'=>'required',
            'bio'=>'required',
            'current_employer'=>'required',
            'self_employed'=>'required',
            'profession'=>'required',
            'latest_education_level'=>'required',
            'address'=>'required',
        ];
    }
}
