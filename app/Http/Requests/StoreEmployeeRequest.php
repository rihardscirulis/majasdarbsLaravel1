<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'name' => 'required|unique:employees|max:15',
            'surname' => 'required|max:25',
            'company' => 'required',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
    */
    public function messages()
    {
        return [
            'name.required' => '"Vārds" ir obligāts aizpildes lauks!',
            'name.unique' => 'Vārds jau eksistē datubāzē!',
            'surname.required' => '"Uzvārds" ir obligāts aizpildes lauks!',
            'surname.max' => 'Nedrīkst pārsniegt 25 simbolus!',
            'company.required' => '"Izvēlieties iestādi" ir obligāts aizpildes lauks!',
        ];
    }

}
