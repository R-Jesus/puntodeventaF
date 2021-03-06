<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name'=>'string|required|unique:products|max:255',
            'image'=>'required|dimensions:min_width=100,min_height=200',
            'sell_price'=>'required|',
            'category_id'=>'integer|required|exists:App\Category,id',
            'provider_id'=>'integer|required|exists:App\Provider,id',
        ];
    }

    public function messages()
    {
        return[
            
            'name.string'=>'El valor no es correcto.',
            'name.required'=>'Este campo es requerido.',
            'name.unique'=>'Este producto ya esta registrado.',
            'name.max'=>'Solo se permite 255 caracteres.',

            'image.required'=>'El campo es requerido.',
            'image.dimensions'=>'Solo se permiten imagenes de 100x200 px.',

            'sell_price.required'=>'El campo es requerido.',

            'category.id.integer'=>'El valor tiene que ser entero.',
            'category.id.required'=>'El campo es requerido.',
            'category.id.exists'=>'La categoria no existe.',

            'provider.id.integer'=>'El valor tiene que ser entero.',
            'provider.id.required'=>'El campo es requerido.',
            'provider.id.exists'=>'La proveedor no existe.',
        ];
    }
}
