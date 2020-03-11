<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmeRequest extends FormRequest
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
            'titulo' => 'required',
            'classificacao' => 'required|numeric|max:10',
            'premios' => 'required|integer',
            'duracao' => 'required|numeric',
            'dia' => 'required',
            'mes' => 'required',
            'ano' => 'required'
        ];
    }

    //inserindo mensagens de erro personalizadas
    public function messages(){
        return [
            'titulo.required' => 'O campo título é obrigatório.',
            'classificacao.required' => 'O campo classificação é obrigatório.',
            'classificacao.numeric' => 'O campo classificação precisa ser numérico.',
            'premios.required' => 'O campo prêmios é obrigatório.',
            'premios.integer' => 'O campo prêmios precisa ser um número inteiro.',
            'duracao.required' => 'O campo duração é obrigatório.',
            'duracao.integer' => 'O campo duração precisa ser numérico',
            'dia.required' => 'O campo dia é obrigatório.',
            'mes.required' => 'O campo mês é obrigatório.',
            'ano.required' => 'O campo ano é obrigatório.',
        ];
    }
}
