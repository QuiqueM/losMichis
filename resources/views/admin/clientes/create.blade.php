@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <h3>Nuevo Cliente</h3>
@stop

@section('content')
    <div class="card card-info">
        <div class="card-header">
            Campos con * Obligatorios
        </div>
        <div class="card-body">
            {!! Form::open(['route' => 'admin.clientes.store'])!!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre *') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono *') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono']) !!}
                    @error('telefono')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('correo', 'Correo *') !!}
                    {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el correo']) !!}
                    @error('correo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                {!! Form::submit('Crear Cliente', ['class' => 'btn btn-info']) !!}
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