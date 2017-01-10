@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h1>
                        {{$prototipo->nombre}}
                    </h1>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Partida</th>
                            <th>Concepto</th>
                            <th>Descripcion</th>
                            <th>Unidad</th>
                            <th>Destajo</th>
                        </tr>
                        </thead>
                        @foreach($destajos as $num => $fila)
                            <tbody>
                            <tr class="success">
                                <td>{{$num + 1}}</td>
                                <td>{{$fila->partida}}</td>
                                <td>{{$fila->concepto}}</td>
                                <td>{{$fila->descripcion}}</td>
                                <td>{{$fila->unidad}}</td>
                                <td>$ {{$fila->destajo}}</td>
                            </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection