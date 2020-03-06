<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Episode;

class EpisodeController extends Controller
{
    public function index(){
        $episodes = Episode::all();
        $episode = Episode::find(1);//busca o id=1
        //$episodes_com_query = Episode::query()->whereIn('id', [1,2])->get();
        $episodes_com_query = Episode::query()->whereIn('id', [1,2])->first();//só retorna o primeiro da consulta
        
        dd($episodes_com_query->toArray());
        //dd($episode->toArray()); //só mostra os dados da tabela
        //dd($episodes);
    }
}
