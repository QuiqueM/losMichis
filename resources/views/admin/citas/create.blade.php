@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <h3>Registra Cita</h3>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-success">
        <strong>{{session('info')}}</strong>
    </div>
    @endif
    <div class="card card-info">
        <div class="card-header">
            Los campos con * son Obligatorios
        </div>
        <div class="card-body">
            {!! Form::open( ['route' => ['admin.citas.store']])!!}
                {!! Form::hidden('cliente_id', $cliente->id) !!}
                {!! Form::hidden('mascota_id', $mascota->id) !!}
                {!! Form::hidden('user_id', auth()->user()->id) !!}
                <div class="form-group">
                    {!! Form::label('dueño', 'Nombre del Dueño') !!}
                    {!! Form::text('dueño', $cliente->nombre, ['class' => 'form-control', 'readonly']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('mascota', 'Nombre del animal') !!}
                    {!! Form::text('mascota', $mascota->nombre, ['class' => 'form-control', 'readonly']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('fecha', 'fecha*') !!}
                    {!! Form::date('fecha', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
                    @error('fecha')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('obervaciones', 'Obervaciones') !!}
                    {!! Form::text('observaciones',null, ['class' => 'form-control', 'placeholder' => 'ingrese alguna observacion']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                

                {!! Form::submit('Guardar Cita', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop