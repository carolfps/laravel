<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function index() {
        $usuarios = User::paginate();
        return view('usuarios', ['usuarios' => $usuarios]);
    }

    public function create() {
        return view('adicionar-usuario');
    }

    public function store(UserRequest $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->confirm_password = $request->confirm_password;


        return redirect('usuarios')->with('mensagem','Usuario adicionado com sucesso');
    }
}