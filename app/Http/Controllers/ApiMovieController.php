<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\FilmeRequest;

class ApiMovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::paginate();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FilmeRequest $request)
    {
        $data = $request->all();
        $novoFilme = new Movie();
        $novoFilme->release_date = "$request->ano-$request->mes-$request->dia 00:00:00";
        $novoFilme->fill($data);
        $novoFilme->save();

        return $novoFilme;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {
        $movie = Movie::findOrFail($id);
        return $movie;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id); //traz os dados do banco
        $movie->fill($request->all()); //preenche com os valores do request
        $movie->save();

        return $movie; //retorna para o navegador o movie em formato JSON
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();
    }
}
