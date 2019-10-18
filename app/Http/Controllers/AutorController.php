<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Autor;
Use App\Models\Comic;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

     $autors =Autor::create($request->all());

    $autor_id=Autor::inRandomOrder()->value('id');
    
    $comics= new Comic;
    $comics->nombrecomic=$request->nombrecomic;
    $comics->fechapublicacion=$request->fechapublicacion;
    $comics->fechafinalizacion=$request->fechafinalizacion;
    $comics->autor_id=$autor_id;
    $comics->save();

    $autor=Autor::find($autor_id);
    $comic=Comic::all()->pluck('id')->toArray();
    $autor->comics()->sync($comic);

    return  $autors;
      
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
        $autor_id=Autor::inRandomOrder()->value('id');
        $autor=Autor::find($autor_id);
        $comic=Comic::all()->pluck('id')->toarray();
        $autor->comics()->detach();
        $autor->comics()->attach($comic);
    
    

    

      return  $autor->comics;


    
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
