<?php

namespace Destajos\Http\Controllers;

use Destajos\Asignacion;
use Destajos\Avance;
use Destajos\Destajos;
use Destajos\Empleado;
use Destajos\Lote;
use Destajos\tablaDestajos;
use Illuminate\Http\Request;

use Destajos\Http\Requests;

class IngresoControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $fila = new tablaDestajos;
        $fila->fill($request->all());
        $p1 = $request['porcentaje1'];
        $p2 = $request['porcentaje2'];
        $porcentaje = $request['porcentaje'] = $p1+($p2/10);
        $fila->porcentaje = $porcentaje;

        $fila->save();


        return redirect('ingreso/'.$fila->id_avance);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $avance = Avance::find($id);
        $filas = tablaDestajos::Filas($id);
        $arr = tablaDestajos::FilasArr($id);
        $lote = Lote::find($avance->id_asigna);
        $asigna = Asignacion::Prototipo($avance->id_asigna);
        $destajos = Destajos::DestajosList($asigna->id_prototipo,$arr);
        $empleado = Empleado::find($avance->id_empleado);
        return view('Ingreso.create',compact('id','avance','lote','destajos','empleado','filas'));
        //return view('Ingreso.show',compact('avance','lote','destajos','empleado'));
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
