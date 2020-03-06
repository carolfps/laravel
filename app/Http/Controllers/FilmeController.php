<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmeController extends Controller
{
        
    public function procurarFilmeId($id){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
        return "O filme escolhido foi: $filmes[$id]";
    }

    public function procurarFilmeNome($nome){
        
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];

        $posicao=array_search($nome,$filmes);

        if($posicao){
            return "Nós temos o filme $filmes[$posicao]";
        } else{
            return "Não foram encontrados resultados";
        }   
    }

    public function listar(){
        $filmes = [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
        return view("filmes", ["filmes"=>$filmes]);
        
        //a linha de baixo executa o mesmo que esta de cima
        //return view("filmes", compact("filmes"));
    }

    public function adicionarFilme(){
        return view("adicionar-filme");
    }

    public function adicionarFilmePost(){
        //return "Filme adicionado com sucesso";
        return redirect('/filmes')->with('mensagem','Formulario salvo');
    }
}
