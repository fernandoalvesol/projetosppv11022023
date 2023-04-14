<?php

namespace App\Http\Requests\Painel;

use Illuminate\Foundation\Http\FormRequest;

class BlacklistsFormRequest extends FormRequest
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

            'tipo'            => 'required',
            'cnpjcpf'         => 'required',
            'rg'              => 'required',
            'razaosocial'     => 'required',
            'endereco'        => 'required', 
            'complemento'     => 'required', 
            'bairro'          => 'required',
            'cidade'          => 'required', 
            'cep'             => 'required',
            'uf'              => 'required',
            'email'           => 'required', 
            'fone'            => 'required|min:3|max:11', 
            'celular'         => 'required|min:3|max:11',  
            'natoperacao'     => 'required',
            'dtocorrencia'    => 'required',
            'price'           => 'required',
            'obs'             => ['nullable'],
                 


        ];
    }
}
