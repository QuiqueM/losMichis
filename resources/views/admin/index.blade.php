@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <h1>Veterinaria Michis</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            <h5>Veterinario con mayor numero de citas entre {{$lastMonth}} y {{$today}} es: <i>{{$cita->user->name}}</i>, con un total de {{$cita->numCitas}} citas.</h5>
        </div>
    </div>
   
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-header">
            <h3>Listado de Veterinarios</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">E-mail</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.show', ['id' => $user->id])}}">Info</a>
                        </td>
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