<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientRequest extends FormRequest
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
            'first_name' => 'required|max:255|min:3',
            'last_name' => 'required|max:255|min:3',
            'phone' => 'required',
            'email' => 'nullable|email',
            'rfc' => 'sometimes'
        ];
    }
    public function messages(){
      return [
        'first_name.required' => 'Este campo es obligatorio.',
        'first_name.max' => 'Este campo debe contener por máximo 255 caracteres.',
        'first_name.min' => 'Este campo debe contener por lo menos 3 caracteres.',

        'last_name.required' => 'Este campo es obligatorio.',
        'last_name.max' => 'Este campo debe contener por máximo 255 caracteres.',
        'last_name.min' => 'Este campo debe contener por lo menos 3 caracteres.',

        'phone.required' => 'Este campo es obligatorio.',
        'email.email' => 'Este campo debe ser un correo válido.',
        

        // 'codigo.required' => 'El campo código es obligatorio.',
        // 'codigo.max' => 'El campo código debe máximo 50 caracteres.',
        // 'salario.required' => 'El campo salario es obligatorio.',
        // 'salario.numeric' => 'El campo salario solo acepta números.',
        // 'salario.min' => 'El campo salario no debe ser menor a 0.',
        // 'telefono.required' => 'El campo telefono es obligatorio.',
        // 'telefono.max' => 'El campo telefono debe máximo 45 caracteres.',
        // 'foto.required' => 'El campo file es obligatorio',
        // 'foto.mimes' => 'Los tipos de archivos permitodos son: JPG, PNG, JPEG y PDF',
        // 'foto.max' => 'El tamaño máximo permitido para el archivo es de 1MB'
      ];
    }
}
