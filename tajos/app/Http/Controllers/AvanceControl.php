<?php

namespace Destajos\Http\Controllers;

use Destajos\Avance;
use Destajos\Destajos;
use Destajos\Empleado;
use Destajos\Lote;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Destajos\Http\Requests;

class AvanceControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $destajos = Destajos::all();
        return view ('Avance.index',compact('destajos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now();;
        $destajistas = Empleado::EmpleadoList();
        $lotes = Lote::LoteList();
        return view('Avance.create',compact('destajistas','lotes','fecha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $avance = new Avance;
        $avance->fill($request->all());
        $avance->save();

        return redirect('ingreso/'.$avance->id);
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
