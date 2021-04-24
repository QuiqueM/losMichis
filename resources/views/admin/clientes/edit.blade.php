@extends('adminlte::page')

@section('title', 'Michis')

@section('content_header')
    <h3>Información del Cliente</h3>
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
            {!! Form::model($cliente, ['route' => ['admin.clientes.update', $cliente], 'method' => 'put'])!!}
                <div class="form-group">
                    {!! Form::label('nombre', 'Nombre*') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre']) !!}
                    @error('nombre')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('telefono', 'Telefono*') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el telefono']) !!}
                    @error('telefono')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                <div class="form-group">
                    {!! Form::label('correo', 'Correo*') !!}
                    {!! Form::text('correo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el email']) !!}
                    @error('correo')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
                
                {!! Form::submit('Actualizar Cliente', ['class' => 'btn btn-info']) !!}
            {!! Form::close() !!}
        </div>
    </div>
    <div class="card card">
        <div class="card-header">
            <a class="btn btn-info  float-right" href="{{route('admin.mascotas.create', ['id'=>$cliente->id])}}">Agregar mascota</a>
            <h3>Sus mascotas</h3>
        </div>
        @if ($mascotas->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Tipo de animal</th>
                    <th scope="col">Peso</th>
                    <th scope="col">Sexo</th>
                    <th colspan="2"></th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($mascotas as $mascota)
                    <tr>
                        <td>{{$mascota->nombre}}</td>
                        <td>{{$mascota->tipo}}</td>
                        <td>{{$mascota->peso}}</td>
                        <td>{{$mascota->sexo}}</td>
                        <td width="10px">
                            <a class="btn btn-primary btn-sm" href="{{route('admin.citas.create', ['id_cliente'=>$cliente->id, 'id_mascota' => $mascota->id])}}">Cita</a>
                        </td>
                        <td width="10px">
                            <a class="btn btn-warning btn-sm" href="{{route('admin.mascotas.edit', $mascota)}}"><i class="fas fa-edit"></i></a>
                        </td>
                        <td width="10px">
                            <form action="{{route('admin.mascotas.destroy', $mascota)}}" method="POST">
                                @csrf
                                @method('delete')

                                <button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-trash-alt"></i></button>
                            </form>  
                        </td>
                      </tr>
                    @endforeach
                 
                </tbody>
              </table>
        </div>
    @else
        <div class="card-body">
            <strong>No hay registros</strong>
        </div>
    @endif
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop