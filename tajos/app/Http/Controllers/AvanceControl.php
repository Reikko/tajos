<?php

namespace Destajos\Http\Controllers;

use Destajos\Asignacion;
use Destajos\Avance;
use Destajos\Destajos;
use Destajos\Empleado;
use Destajos\Lote;
use Destajos\Prototipo;
use Destajos\tablaDestajos;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Destajos\Http\Requests;
use Illuminate\Support\Facades\DB;

class AvanceControl extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $avances = Avance::all();
        return view('Avance.index',compact('avances'));
    }

    public function cambiaPrototipo(Request $request,$id)
    {
        if($request -> ajax())
        {
            $lotes = Asignacion::Lotes($id);
            return response()->json($lotes);
        }
    }




    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fecha = Carbon::now();
        $destajistas = Empleado::EmpleadoList();
        //$lotes = Lote::LoteList();
        $lotes = Asignacion::LotesList(1);          //Muestra lotes del id 1 , esto puede cambiar al cambiar el select
        $prototipos = Asignacion::PrototiposList();
        return view('Avance.create',compact('destajistas','lotes','fecha','prototipos'));
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

    //Muestra informacion del avance buscado por id
    public function show($id)
    {
        $avance = Avance::find($id);
        $filas = Avance::Avances($id);
        $lote = Lote::find($avance->id_lote);
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
