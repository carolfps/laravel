<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required', //Estrutura: 'nome_do_campo_no_formulário' => 'validação' (procurar validações no Google com Laravel Validation)
            'email' => 'required|email|unique:users,id',
            'password' => 'required|min:6|confirmed'
        ];
    }

    //inserindo mensagens de erro personalizadas
    public function messages(){
        return [
            'name.required' => 'O campo nome é obrigatório.', //Estrutura: 'nome_do_campo.regra' => 'mensagem de erro'
            'email.required' => 'O campo email é obrigatório',
            'email.email' => 'O email precisa ser um email válido',
            'password.required' => 'O campo senha é obrigatório',
            'password.min' =>  'O campo senha deve ter pelo menos 6 caracteres',
            "password.confirmed" => 'O campo de confirmação deve ser igual a senha'
        ];
    }
}
