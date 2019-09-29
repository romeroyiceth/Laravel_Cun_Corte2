<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Auto;
use App\Models\Motor;
class AutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $auto=Auto::all();
        //return $auto;
        return csrf_token(); //1teQkWfPv2BPHlRavIHU7m6mLQdMyGBjT01ZFnOb
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
        
        $auto =Auto::create($request->all());

        
        $motor=[
        'modelo'=>'mustang',
         'potencia'=>'13',
        'rendimiento'=>'14',
        'consumo'=>'234'];
        
       $automotor= $auto->motor()->create($motor);

        return  $automotor;

        
        
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
