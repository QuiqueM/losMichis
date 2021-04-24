@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.clientes.create')}}">Agregar Cliente</a>
    <h3>Listado de Clientes</h3>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
    @endif
    @livewire('admin.clientes-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop