<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name'=>'string|required|max:255',
            'dni'=>'string|required|unique:clients, dni'.$this->route('client')->id.'|max:8|min:8',
            'ruc'=>'string|required|unique:clients, ruc'.$this->route('client')->id.'|max:11|min:11',
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients, phone'.$this->route('client')->id.'|max:10|min:10',
            'email'=>'string|required|unique:clients, email'.$this->route('client')->id.'|max:255|email:rfc,dns',
        ];
    }

    public function messages()
    {
        return[
            
            'name.string'=>'El valor no es correcto.',
            'name.required'=>'Este campo es requerido.',
            'name.unique'=>'Este cliente ya esta registrado.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'dni.string'=>'El valor no es correcto.',
            'dni.required'=>'El campo es requerido.',
            'dni.unique'=>'Este DNI ya se encuentra registrado.',
            'dni.min'=>'Se requiere 8 caracteres.',
            'dni.max'=>'Solo se permite 8 caracteres.',

            'ruc.string'=>'El valor no es correcto.',
            'ruc.required'=>'El campo es requerido.',
            'ruc.unique'=>'El número de RUC ya se encuentra registrado.',
            'ruc.min'=>'Se requiere 11 caracteres.',
            'ruc.max'=>'Solo se permite 11 caracteres.',

            'address.string'=>'El valor no es correcto.',
            'address.required'=>'Este campo es requerido.',
            'address.max'=>'Solo se permite 255 caracteres.',

            'phone.string'=>'El valor no es correcto.',
            'phone.required'=>'Este campo es requerido.',
            'phone.unique'=>'El número de celular ya se encuentra registrado.',
            'phone.min'=>'Se requiere 10 caracteres.',
            'phone.max'=>'Solo se permite 10 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.required'=>'Este campo es requerido.',
            'email.unique'=>'La dirección de correo electronico ya se encuentra registrado.',
            'email.max'=>'Solo se permiten 255 caracteres.',
            'email.email'=>'No es un correo electronico.',
        ];
    }
}
