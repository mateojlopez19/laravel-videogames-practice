<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVideogame extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            //
            'name' => 'required|min:5|max:10'
        ];
    }

    public function attributes()
    {
        return [
            //
            'name' => 'Nombre de juego'
        ];
    }

    public function messages()
    {
        return [
            //make function request for message
            'name.required' => 'El nombre del juego es requerido',
        ];
    }
}
