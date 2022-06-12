<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'firstname' => 'required|string|min:2|max:255',
            'secondname' => 'required|string|min:2|max:255',
            'email' => 'required|email:rfc,dns|max:255',
            'password' => 'required|string|min:8|max:32|required_with:passconfirm|same:passconfirm',
            'passconfirm' => 'required|string|min:8',
            'agree' => 'required|boolean:true',
        ];
    }
}
