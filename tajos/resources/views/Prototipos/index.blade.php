@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
               <h1>
                   Prototipos
               </h1>
            </div>
            <div class="panel-body">
                @foreach($prototipos as $fila)
                    <div class="panel panel-info">
                        <div class="panel-heading">{{$fila->nombre}}</div>
                        <div class="panel-body">
                            <div class="btn-group btn-group-justified">
                                {{link_to('prototipo/'.$fila->id,'Ver lotes', ['class'=>'btn btn-primary'])}}
                                {{link_to_route('prototipo.edit', 'Editar', $fila->id, ['class'=>'btn btn-primary'])}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop