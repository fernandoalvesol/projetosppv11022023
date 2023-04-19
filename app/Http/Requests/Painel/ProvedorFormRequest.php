<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class ProvedorFormRequest extends FormRequest
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

            'razaosocial'             => 'required',
            'nomefantasia'            => 'required',
            'tipo'                    => ['nullable'],
            'cnpj'                    => 'required',  
            'inestadual'              => 'required',
            'email'                   => 'required',   
            'site'                    => ['nullable'],
            'atoanatel'               => ['nullable'],
            'inmunicipal'             => ['nullable'],
            'fone'                    => 'required|min:3|max:11', 
            'contato'                 => 'required',
        ];
    }
}
