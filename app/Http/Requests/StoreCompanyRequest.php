<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
            'name' => 'required|unique:companies|max:50',
            'registrationNumber' => 'required|unique:companies|max:13|min:13',
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
            'name.required' => '"Iestades nosaukums" ir obligāts aizpildes lauks!',
            'registrationNumber.required' => '"Reģistrācijas numurs" ir obligāts aizpildes lauks!',
            'registrationNumber.max' => 'Nedrīkst pārsniegt reģistrācijas numura 13 simbolu virkni!',
            'name.unique' => 'Iestades nosaukums jau eksistē!',
            'registrationNumber.unique' => 'Reģistrācijas numurs jau eksistē!',
            'registrationNumber.min' => 'Nedrīkst būt mazāk par 13 simboliem!',
        ];
    }
}
