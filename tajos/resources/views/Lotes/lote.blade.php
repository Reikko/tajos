@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    Prototipo {{$id}}
                    {{link_to('prototipo','Regresar', ['class'=>'btn btn-primary'])}}
                    {{link_to('precios/'.$id,'Tabla Precios', ['class'=>'btn btn-primary'])}}
                </h1>
            </div>
            <div class="panel-body">
                @foreach($lotes as $fila)
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{$fila->nombre}}</div>
                        <div class="panel-body">
                            {{link_to('lote/'.$fila->id_lote,'Ver avance', ['class'=>'btn btn-primary'])}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop