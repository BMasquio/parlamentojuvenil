<?php

namespace App\Http\Requests;

class LoginSeeducUser extends Request
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
            'registration' => 'required',
            'birthdate' => 'required|birthdate', // &&&&&& |lessthan18|morethan13 BACALHAU!!!
        ];
    }
}
