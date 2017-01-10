@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-success">
                <div class="panel-heading">
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Lote</th>
                            <th>Empleado</th>
                            <th>Fecha Inicial</th>
                            <th>Fecha Final</th>
                            <th>Opcion</th>
                        </tr>
                        </thead>
                        @foreach($avances as $num => $fila)
                            <tbody>
                                <tr class="success">
                                    <td>{{$num + 1}}</td>
                                    <td>{{$fila->id_lote}}</td>
                                    <td>{{$fila->id_empleado}}</td>
                                    <td>{{$fila->f_ini}}</td>
                                    <td>{{$fila->f_fin}}</td>
                                    <td>{{link_to('avance/'.$fila->id,'Ver', ['class'=>'btn btn-primary btn-block'])}}</td>
                                </tr>
                            </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
