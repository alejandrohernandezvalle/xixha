<?php

namespace xixha\Http\Requests;

use xixha\Http\Requests\Request;

class ContactoFormRequest extends Request
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
            'direccion'=>'max:200',
            'telefono'=>'max:10'
        ];
    }
}
