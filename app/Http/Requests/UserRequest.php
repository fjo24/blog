<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;//se pasa de false a true porque se va a usar
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() // aqui colocamos las validaciones, las reglas para el formulario
    {
        return [
            'name' => 'min:4|max:120|required',
            'email'=> 'min:4|max:120|required|unique:users',
            'password' => 'min:4|max:250|required'
        ];
    }
}
