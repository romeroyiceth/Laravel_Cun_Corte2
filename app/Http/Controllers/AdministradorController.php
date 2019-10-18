<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Administrador;
use App\Models\Usuario;
use App\Models\Imagen;

class AdministradorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $administrador=Administrador::all();
        return csrf_token();  //tdqGr7qezbLnFDeEW7odFNvVNuEUv7szlmyNCHVh  */
        $administrador = Administrador::find(2); 
        $imagen = $administrador->imagen; 
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
    public function store(Request $request)
    {
        $administrador =Administrador::create($request->all());
        $imagen=[
            'url'=>$request->url
        ];
        $adm=$administrador->imagen()->create($imagen);
        return $adm;
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
    $administrador_id=Administrador::inRandomOrder()->value('id');
    $administrador=Administrador::find($administrador_id);
    $datosa=array();
    $datosa['nombre']=$request->nombre;

    $administrador->update($datosa);

  
     $datosi=array();
    $datosi['url']=$request->url;

   

    $administrador->imagen()->update($datosi);

    return "Datos actualizados";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        $imagen_id=Imagen::inRandomOrder()->value('id');
        $imagen=Imagen::find($imagen_id);

        $administrador_id=Administrador::inRandomOrder()->value('id');
        $administrador=Administrador::find($administrador_id);
       
        $imagen->delete();
        $administrador->delete();

        return 'Se elimino el administrador  '.$administrador->id.'  y la imagen  '.$imagen->id.'   correctamete';
    }
}
