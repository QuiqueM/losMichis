@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <h1>Listado de Citas</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Obervaciones</th>
                    <th scope="col">Mascota</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($citas as $cita)
                    <tr>
                        <th scope="row">{{$cita->id}}</th>
                        <td>{{$cita->fecha}}</td>
                        <td>{{$cita->observaciones}}</td>
                        <td>{{$cita->nombre}}</td>
                      </tr>
                    @endforeach
                 
                </tbody>
              </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop