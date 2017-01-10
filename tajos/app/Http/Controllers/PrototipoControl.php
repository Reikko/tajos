<?php

namespace Destajos\Http\Controllers;

use Destajos\Asignacion;
use Destajos\Prototipo;
use Illuminate\Http\Request;

use Destajos\Http\Requests;

class PrototipoControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$prototipos = Prototipo::PrototipoList();
        $prototipos = Prototipo::all();
        return view('Prototipos.index',compact('prototipos'));
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

    //Muestra lotes relacionados con el id
    public function show($id)
    {
        $lotes = Asignacion::Lotes($id);
        return view('Lotes.lote',compact('id','lotes'));
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
