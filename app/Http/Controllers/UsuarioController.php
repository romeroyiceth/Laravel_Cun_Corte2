<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Models\Imagen;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario = Usuario::find(2); 
        $imagen = $usuario->imagen; 
        return $imagen;
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
    public function store (Request $request)
    {
        $usuario =Usuario::create($request->all());
        $imagen=[
            'url'=>$request->url
        ];
        $usu=$usuario->imagen()->create($imagen);
        return $usu;
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
        $usuario_id=Usuario::inRandomOrder()->value('id');
        $usuario=Usuario::find($usuario_id);
        $datosu=array();
        $datosu['nombre']=$request->nombre;
    
        $usuario->update($datosu);
    
        $imagen_id=Imagen::inRandomOrder()->value('id');
        $imagen=Imagen::find($imagen_id);
        $datosi=array();
        $datosi['url']=$request->url;
        $datosi['imageable_id']=$imagen->imageable_id;
        $datosi['imageable_type']=$imagen->imageable_type;
    
        $imagen->update($datosi);
    
        return "Datos actualizados";
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
