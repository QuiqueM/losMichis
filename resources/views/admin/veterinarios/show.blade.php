@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h3>Información del Veterinario</h3>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <label for="">Nombre</label>
                    <input type="text" value="{{$veterinario->name}}" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Correo</label>
                    <input type="text" value="{{$veterinario->email}}" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Telefono</label>
                    <input type="text" value="{{$veterinario->telefono}}" class="form-control" disabled>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="">Calle</label>
                    <input type="text" value="{{$veterinario->calle}}" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Numero</label>
                    <input type="text" value="{{$veterinario->numero}}" class="form-control" disabled>
                </div>
                <div class="col">
                    <label for="">Colonia</label>
                    <input type="text" value="{{$veterinario->colonia}}" class="form-control" disabled>
                </div>
            </div>
            
            <div class="row mt-4">
                <label for="" class="col col-form-label">Numero de citas entre {{$lastMonth}} y {{$today}} es de: </label>
                <div class="col">
                    <input type="num" class="form-control" value="{{$numCitas}}" disabled>
                </div>
                
            </div>
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop