@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h1>
                    Lotes
                </h1>
            </div>
            <div class="panel-body">
                @foreach($lotes as $fila)
                    <div class="panel panel-primary">
                        <div class="panel-heading">{{$fila->id_lote}}</div>
                        <div class="panel-body">Panel Content</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@stop