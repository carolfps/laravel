<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Http\Requests\FilmeRequest;
use App\Genre;

class FilmeController extends Controller
{
        
    public function procurarFilmeId($id){
        $filmes = Movie::find($id);
        $filme = $filmes -> title;
        return "O filme escolhido foi: $filme";
    }
        
    // public function procurarFilmeId($id){
    //     $filmes = [
    //         1 => "Toy Story",
    //         2 => "Procurando Nemo",
    //         3 => "Avatar",
    //         4 => "Star Wars: Episódio V",
    //         5 => "Up",
    //         6 => "Mary e Max"
    //         ];
    //     return "O filme escolhido foi: $filmes[$id]";
    // }

    public function getFilmes(){
        return [
            1 => "Toy Story",
            2 => "Procurando Nemo",
            3 => "Avatar",
            4 => "Star Wars: Episódio V",
            5 => "Up",
            6 => "Mary e Max"
            ];
    }

    public function procurarFilmeNome($nome){
        $filme = Movie::query()->where("title",$nome)->first();
        $titulo = $filme->title;
        return $titulo;
    }

    // public function procurarFilmeNome($nome){
        
    //     // $filmes = [
    //     //     1 => "Toy Story",
    //     //     2 => "Procurando Nemo",
    //     //     3 => "Avatar",
    //     //     4 => "Star Wars: Episódio V",
    //     //     5 => "Up",
    //     //     6 => "Mary e Max"
    //     //     ];
        
    //     $filmes = $this->getFilmes();
    //     $posicao=array_search($nome,$filmes);

    //     if($posicao){
    //         return "Nós temos o filme $filmes[$posicao]";
    //     } else{
    //         return "Não foram encontrados resultados";
    //     }   
    // }

    public function listar(){
        // $filmes = Movie::all();
        $filmes = Movie::query()->paginate();
        return view("filmes", ["filmes"=>$filmes]);
        
        //a linha de baixo executa o mesmo que esta de cima
        //return view("filmes", compact("filmes"));
    }

    // public function listar(){
    //     $filmes = [
    //         1 => "Toy Story",
    //         2 => "Procurando Nemo",
    //         3 => "Avatar",
    //         4 => "Star Wars: Episódio V",
    //         5 => "Up",
    //         6 => "Mary e Max"
    //         ];
    //     return view("filmes", ["filmes"=>$filmes]);
        
    //     //a linha de baixo executa o mesmo que esta de cima
    //     //return view("filmes", compact("filmes"));
    // }

    public function adicionarFilme(){
        $genres = Genre::all();
        return view("adicionar-filme", ["genres"=>$genres]);
    }

    public function adicionarFilmePost(FilmeRequest $request){ //tem que colocar que o "tipo" é FilmeRequest
        $novoFilme = new Movie();
        $novoFilme-> title = $request->titulo;
        $novoFilme-> rating = $request->classificacao;
        $novoFilme-> awards = $request->premios;
        $novoFilme-> length = $request->duracao;
        $novoFilme-> release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        $novoFilme-> genre_id = $request->genre_id;
        $novoFilme->save();

        //para usar o método abaixo, o nome dos campos deve ser igual ao campo da tabela
        // $data = $request->all();
        // $novoFilme = new Movie();
        // $novoFilme-> release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        // $novoFilme -> fill($data->save());
        //return "Filme adicionado com sucesso";
        return redirect('/filmes')->with('mensagem','Formulario salvo');
    }

}
