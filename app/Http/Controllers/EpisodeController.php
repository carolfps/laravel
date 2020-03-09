<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Episode;

class EpisodeController extends Controller
{
    public function index(){
        //$episodes = Episode::all();
        //$episode = Episode::find(1);//busca o id=1
        //$episodes_com_query = Episode::query()->whereIn('id', [1,2])->get();
        //$episodes_com_query = Episode::query()->whereIn('id', [1,2])->first();//só retorna o primeiro da consulta
        
        //dd($episodes_com_query->toArray());
        //dd($episode->toArray()); //só mostra os dados da tabela
        //dd($episodes);

        //inserindo uma linha na tabela episodes
        // $episode = new Episode();
        // $episode -> title = "Mr. Robot";
        // $episode -> number = "456";
        // $episode -> rating = "10";
        // $episode -> release_date ="2020-03-06 00:00:00";
        // $episode->save();

        //mostrando na tela os dados do episodio que acabamos de inserir
        $episode = Episode::find(58);
        dd($episode->toArray());

        //Editando o título episodio com id=1
        // $episode = Episode::find(1);
        // $episode -> title = "--Winter Is Coming --";
        // $episode->save();

        //Deletando uma linha da tabela episodes 
        //$episode = Episode::find(58);
        //$episode->delete();

    }

}
