@extends('layouts.app')
@section('444')
    <h3>Ingreso</h3>
    {!! Form::open(['route'=>'avance.store','method'=>'POST']) !!}
    <div class="form-group">
        {!! Form::label('Destajista:') !!}
        {!! Form::select('id_empleado',$destajistas,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::label('Lotes:') !!}
        {!! Form::select('id_asigna',$lotes,null,['class'=>'form-control']) !!}
    </div>
    <div class="form-group">
            <div class="col-sm-6">
                {!! Form::label('Fecha inicial') !!}
                <input type="date" name="f_ini" class="form-control" value={{$fecha}}>
            </div>
            <div class="col-sm-6">
                {!! Form::label('Fecha inicial') !!}
                <input type="date" name="f_fin" class="form-control" value={{$fecha->addDays(7)}}>
            </div>
    </div>
    {!! Form::submit('Agregar',['class'=>'btn btn-primary']) !!}
    {!! Form::close() !!}
@stop