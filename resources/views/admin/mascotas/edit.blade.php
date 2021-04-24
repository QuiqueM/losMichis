@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <h3>Información de la Mascota</h3>
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
            {!! Form::model($mascota, ['route' => ['admin.mascotas.update', $mascota], 'method' => 'put'])!!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre*') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('edad', 'Edad (en años)*') !!}
                    {!! Form::text('edad', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono']) !!}
                    @error('edad')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('tipo', 'Tipo de animal*') !!}
                    {!! Form::select('tipo', $tipos,$mascota->tipo, ['class' => 'form-control']) !!}
                    @error('tipo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('peso', 'Peso (en Kg)*') !!}
                    {!! Form::text('peso', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el peso']) !!}
                    @error('peso')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('sexo', 'Sexo del animal*') !!}
                    {!! Form::select('sexo', ['hembra' => 'hembra', 'macho' => 'macho'],$mascota->sexo, ['class' => 'form-control']) !!}
                    @error('sexo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

                {!! Form::submit('Actualizar Mascota', ['class' => 'btn btn-info']) !!}
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