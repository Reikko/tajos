@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>{{$lote->nombre}}</h1>
                <h5>Destajista: {{$empleado->nombre}}</h5>
                <h5>Folio N° : {{$avance->id}}</h5>
                <h5>Fecha inicial semana: {{$avance->f_ini}}</h5>
                <h5>Fecha final semana: {{$avance->f_fin}}</h5>
            </div>
            <div class="panel-body">
                {!! Form::open(['route'=>'ingreso.store','method'=>'POST']) !!}
                {{ Form::hidden('id_avance',$id) }}
                <table class="table table-bordered table-hover">
                    <thead>
                    <tr>
                        <th>CONCEPTO</th>
                        <th>DESCRIPCION</th>
                        <th>CANTIDAD</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>
                            {!! Form::submit('Agregar',['class'=>'btn btn-primary btn-block']) !!}
                        </td>
                        <td>
                            <div class="form-group">
                                {!! Form::select('id_destajo',$destajos,null,['class'=>'form-control']) !!}
                            </div>
                        </td>
                        <td width="200">
                            <div class="form-group">
                                <div class="input-group">
                                    {!! Form::number('porcentaje1',0,['class'=>'form-control','min'=>'0','max'=>'1']) !!}
                                    <span class="input-group-addon">.</span>
                                    {!! Form::number('porcentaje2',0,['class'=>'form-control','min'=>'0','max'=>'9']) !!}
                                </div>
                            </div>
                        </td>
                    </tr>

                    @foreach($filas as $fila)
                        <tr>
                            <td>
                                {{$fila->concepto}}
                            </td>
                            <td>
                                {{$fila->descripcion}}
                            </td>
                            <td width="200">
                                {{$fila->porcentaje}}
                            </td>
                        </tr>
                        @endforeach
                </table>

                {!! Form::close() !!}
            </div>
        </div>
    </div>
@stop