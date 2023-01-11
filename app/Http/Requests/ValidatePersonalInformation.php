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
            'faculty'=>'required',
            'bio'=>'required',
            'current_employer'=>'required',
            'self_employed'=>'required',
            'profession_id'=>'required',
            'latest_education_level'=>'required',
            'address'=>'required',
            'dob'=>'required',
            'start_date'=>'required',
            'end_date'=>'required',
            'country_id'=>'required',
        ];
    }
}
