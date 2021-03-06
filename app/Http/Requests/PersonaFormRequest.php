<?php
namespace xixha\Http\Requests;
use xixha\Http\Requests\Request;
class PersonaFormRequest extends Request
{
    public function authorize()
    { 
        return true;
    } 
    public function rules() 
    {
        return [ 
            'nombre'=>'max:45',
            'apellidopa'=>'max:45',
            'apellidoma'=>'max:45',
            'telefono'=>'max:10',
            'email'=>'max:256',
            'upp'=>'max:45',
            'pgn'=>'max:45',
            'clave_rast'=>'max:45',       
            'num_anual'=>'max:45',
            'certificacion'=>'max:45',
            'sexo'=>'max:10',
            'rfc'=>'max:40',
            'estadoP'=>'max:45',
            'municipio'=>'max:45',
            'calle'=>'max:45',
            'colonia'=>'max:45',
            'temp_cosecha'=>'max:45',
            'loc_api'=>'max:256',
            'mov_col'=>'max:256',
            'donde'=>'max:256',
            'observacion'=>'max:256', 
            'imagen'=>'mimes:jpeg,jpg,bmp,png',      
        ]; 
    }
}