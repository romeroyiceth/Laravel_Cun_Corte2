<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurante;
use App\Models\Reseña;

class RestauranteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /* $restaurante=Restaurante::all();
        return csrf_token();*/ //cCKkGH3h0VinFLbDz6pMmshAaoiyvjJ9JPJjphgz
        $restaurante = Restaurante::find(2); 
        $reseña = $restaurante->reseña; 
        return $reseña;
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
    public function storeCreate(Request $request)
    {
        $restaurante=Restaurante::find(2);
        $reseña=[
            'contenido'=>'la comida deliciosa y con un buen olor'
        ];
        $res=$restaurante->reseña()->create($reseña);
        return $res;
    }
public function Storecreatemany(Request $request)
{
    $restaurante=Restaurante::find(4);
    $res=$restaurante->reseña()->createMany([
        [
            'contenido'=>'la comida tiene demasiado picante',  
        ],
        [
            'contenido'=>'el lugar es relajante'
        ],
    ]);
    return $res;
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
