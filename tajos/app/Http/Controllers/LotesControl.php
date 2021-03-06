<?php

namespace Destajos\Http\Controllers;

use Destajos\Asignacion;
use Destajos\Avance;
use Destajos\Lote;
use Destajos\tablaDestajos;
use Illuminate\Http\Request;

use Destajos\Http\Requests;

class LotesControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
        $filasArr = Avance::LotesArr($id);                                 //Consigue la lista de los id
        $filas = tablaDestajos::FilasDeLotes($filasArr);                    //Devuelve la relacion entre
        $lote = Lote::find($id);
        $proto = Asignacion::Prototipo($lote->id);
        return view('Avance.avanceLote',compact('id','lote','filas','proto'));
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
