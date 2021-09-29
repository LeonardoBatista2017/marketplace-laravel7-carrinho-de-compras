<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'nome' => ['required','min:3','max:30'],
            'descricao' => ['required','min:3','max:900'],
            'photos.*' =>['required','image'],
            'valor'=> ['required'],
        ];
    }

    public function messages()
    {
		return [
			'required' => 'Este campo é obrigatório!',
            'min' => 'Campo deve ter no mínimo :min caracteres',
            'image'=> 'Arquivo não é uma imagem Válida!'
		];
    }
}
