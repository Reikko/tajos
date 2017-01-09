@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    Lotes
                    {{link_to('prototipo','Regresar', ['class'=>'btn btn-primary'])}}
                </h1>
            </div>
            <div class="panel-body">
                @foreach($lotes as $fila)
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{$fila->nombre}}</div>
                        <div class="panel-body">
                            {{link_to('avance/'.$fila->id_lote,'Ver avance', ['class'=>'btn btn-primary'])}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop