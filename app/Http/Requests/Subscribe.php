<?php

namespace App\Http\Requests;

class Subscribe extends Request
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
            //            'name' => 'required',
            //            'registration' => 'required',
            //            'birthdate' => 'required|date_format:d/m/Y|lessthan18|morethan13',
            //            'student_id' => 'required',
            'social_name' => '',
            'city' => 'required|city',
            'school' => 'required|exists:schools,name',
            'gender' => 'required',
            'gender2' => 'required',
            'cpf' => 'required|cpf',
            'id_number' => 'required',
            'id_issuer' => 'required',
            'email' => 'required',
            'phone_home' => '',
            'phone_cellular' => '',
            'zip_code' => 'required',
            'address' => 'required',
            'address_complement' => 'required',
            'address_neighborhood' => 'required',
            'address_city' => 'required',
        ];
    }
}
