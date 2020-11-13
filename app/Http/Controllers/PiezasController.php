<?php

namespace App\Http\Controllers;

use App\Pieza;
use Illuminate\Http\Request;

class PiezasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $piezas = Pieza::all();
        return view("piezas")->with("piezas", $piezas);
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
    public function store(Request $piezaNueva)
    {   
        if(!is_null($piezaNueva->nombre)){
            $pieza = new Pieza;
            $pieza->nombre =$piezaNueva->nombre;
            $pieza->descripcion =$piezaNueva->descripcion;
            $pieza->num_piezas =$piezaNueva->num_piezas;
            $pieza->costo_pieza =$piezaNueva->costo_pieza;
            $pieza->save();
        }
        return redirect("/piezas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function show(Pieza $pieza)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $p = Pieza::find($id);
        return view("editaPieza")->with("pieza", $p);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function update(Request $piezaMod)
    {
        
        $pieza = Pieza::find($piezaMod->id);
        if(!is_null($pieza)){
            $pieza->nombre = $piezaMod->nombre;
            $pieza->descripcion = $piezaMod->descripcion;
            $pieza->num_piezas = $piezaMod->num_piezas;
            $pieza->costo_pieza = $piezaMod->costo_pieza;
            $pieza->save();
        }
        return redirect("/piezas");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pieza  $pieza
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $p = Pieza::find($id);
        $p->delete();
        return redirect("/piezas");
    }
}
