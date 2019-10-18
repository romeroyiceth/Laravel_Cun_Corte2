<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contrato;
use App\Models\Empleado;

class ContratoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contrato=Contrato::all();
        //return $auto;
        return csrf_token();
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
        $contrato =Contrato::create($request->all());
        $empleado=[
        'identificacion'=>$request->identificacion,
         'nombre'=>$request->nombre,
        'apellido'=>$request->apellido];
        
       $contratoempleado= $contrato->empleado()->create($empleado);

        return  $contratoempleado;

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
    $contrato_id=Contrato::inRandomOrder()->value('id');
    $contrato=Contrato::find($contrato_id);
    $datosc=array();
    $datosc['fechainicio']=$request->fechainicio;
    $datosc['fechacierre']=$request->fechacierre;
    $datosc['condiciones']=$request->condiciones;

    $contrato->update($datosc);

    $datose=array();
    $datose['identificacion']=$request->identificacion;
    $datose['nombre']=$request->nombre;
    $datose['apellido']=$request->apellido;
    $datose['contrato_id']=$contrato_id;

    $contrato->empleado()->update($datose);

    return $contrato;
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
