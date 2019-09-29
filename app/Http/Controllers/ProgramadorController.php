<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programador;
Use App\Models\Proyecto;

class ProgramadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programador=Programador::all();
         return $programador;
        //return csrf_token();
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
    public function storeAttach(Request $request)
    {
        //$programador=Programador::create($request->all());
        $programador=Programador::find(2);
        $proyecto=Proyecto::all()->pluck('id');

        $programador->proyectos()->attach($proyecto);

        return  $programador->proyectos;
        
    }
    public function storeSync(Request $request)
    {
        $programador=Programador::find(3);
        $proyecto=Proyecto::all()->pluck('id')->toArray();

        $programador->proyectos()->sync($proyecto);
      
        return  $programador->proyectos;
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
    public function update(Request $request, $id)
    {
        //
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
