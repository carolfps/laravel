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
            'title' => 'required',
            'rating' => 'required|numeric|max:10',
            'awards' => 'required|integer',
            'length' => 'required|numeric',
            'dia' => 'required',
            'mes' => 'required',
            'ano' => 'required'
        ];
    }

    //inserindo mensagens de erro personalizadas
    public function messages(){
        return [
            'title.required' => 'O campo título é obrigatório.',
            'rating.required' => 'O campo classificação é obrigatório.',
            'rating.numeric' => 'O campo classificação precisa ser numérico.',
            'awards.required' => 'O campo prêmios é obrigatório.',
            'awards.integer' => 'O campo prêmios precisa ser um número inteiro.',
            'length.required' => 'O campo duração é obrigatório.',
            'length.integer' => 'O campo duração precisa ser numérico',
            'dia.required' => 'O campo dia é obrigatório.',
            'mes.required' => 'O campo mês é obrigatório.',
            'ano.required' => 'O campo ano é obrigatório.',
        ];
    }
}
