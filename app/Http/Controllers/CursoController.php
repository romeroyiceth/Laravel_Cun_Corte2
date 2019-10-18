<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;
use App\Models\Programa;
use App\Models\Clase;

class CursoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos=Curso::all();
        return $cursos;
    }
    public function getProgramas(){
        $cursos=Curso::with('programas')->get();
        return $cursos;
    }
     
    public function eager(){
        $cursos= Curso::with('clases.programas')->get();
        return $cursos;
    }
     public function lazy(){
        
        $cursos= Curso::all();
        foreach($cursos as $curso){
            {
                $curso->clases;
            }

     }
     
     return $cursos;
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
        $curso=Curso::create($request->all());
        $clases=$curso->clases()->saveMany([
            new Clase([
                'nombre'=>'primero',
                'aula'=>'12',
                'estado'=>'1',
               
            ]),
            new Clase([
                'nombre'=>'segundo',
                'aula'=>'15',
                'estado'=>'0',
                
            ]),
        ]);
                return $clases;

    }

    public function StoreCreate(Request $request){
        $curso=Curso::create($request->all());
        $clases=$curso->clases()->createMany([
            [
                'nombre'=>'tercero',
                'aula'=>'1',
                'estado'=>'1',
              
            ],
            [
                'nombre'=>'cuarto',
                'aula'=>'3',
                'estado'=>'0',
               
            ],
        ]);
        return $clases;
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
