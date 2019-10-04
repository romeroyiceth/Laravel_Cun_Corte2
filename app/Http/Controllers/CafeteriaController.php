<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cafeteria;
use App\Models\Reseña;

class CafeteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cafeteria = Cafeteria::find(2); 
        $reseña = $cafeteria->reseña; 
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
        $cafeteria=Cafeteria::find(1);
        $reseña=[
            'contenido'=>'el cafe es delicioso y con un buen olor'
        ];
        $caf=$cafeteria->reseña()->create($reseña);
        return $caf;
    }
public function Storecreatemany(Request $request)
{
    $cafeteria=Cafeteria::find(2);
    $caf=$cafeteria->reseña()->createMany([
        [
            'contenido'=>'el té es sueve y dulce',  
        ],
        [
            'contenido'=>'las galletas son demasiado dulce'
        ],
    ]);
    return $caf;
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
