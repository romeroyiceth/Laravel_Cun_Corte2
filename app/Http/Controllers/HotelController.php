<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;
use App\Models\Reseña;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotel = Hotel::find(2); 
        $reseña = $hotel->reseña; 
        return $reseña;
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

    public function storeCreate(Request $request)
    {
        $hotel=Hotel::find(4);
        $reseña=[
            'contenido'=>'el hotel tiene buen servicio a la habitacion'
        ];
        $hot=$hotel->reseña()->create($reseña);
        return $hot;
    }
public function Storecreatemany(Request $request)
{
    $hotel=Hotel::find(5);
    $hot=$hotel->reseña()->createMany([
        [
            'contenido'=>'el hotel cuenta con el mejor spa de la zona',  
        ],
        [
            'contenido'=>'tiene fallas en el tiempo de respuesta de las que a tienden recepcion'
        ],
    ]);
    return $hot;
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
