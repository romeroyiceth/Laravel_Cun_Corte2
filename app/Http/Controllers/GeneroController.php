<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Genero;
Use App\Models\Pelicula;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $genero=Genero::all();
        return $genero;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $genero=Genero::create($request->all());
        $pelicula=[
         'nombrepelicula'=>$request->nombrepelicula,
         'fechaestreno'=>$request->fechaestreno];
        
       $generopelicula=$genero->peliculas()->create($pelicula);

        return  $generopelicula;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
    $genero_id=Genero::inRandomOrder()->value('id');
    $genero=Genero::find($genero_id);
    $datosg=array();
    $datosg['tipopublico']=$request->tipopublico;
    $datosg['nombregenero']=$request->nombregenero;

    $genero->update($datosg);

    
    $datosp=array();
    $datosp['nombrepelicula']=$request->nombrepelicula;
    $datosp['fechaestreno']=$request->fechaestreno;
    $datosp['genero_id']=$genero_id;

    $genero->peliculas()->update($datosp);

    return $genero;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
