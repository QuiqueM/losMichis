<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="ingrese el nombre o correo de un cliente">
        </div>
        @if ($clientes->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Telefono</th>
                        <th scope="col">E-mail</th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                        <tr>
                            <th scope="row">{{$cliente->id}}</th>
                            <td>{{$cliente->nombre}}</td>
                            <td>{{$cliente->telefono}}</td>
                            <td>{{$cliente->correo}}</td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.clientes.edit', $cliente)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.clientes.destroy', $cliente)}}" method="POST">
                                    @csrf
                                    @method('delete')
    
                                    <button type="submit" class="btn btn-danger btn-sm"> <i class="fas fa-trash-alt"></i> </button>
                                </form>  
                            </td>
                          </tr>
                        @endforeach
                     
                    </tbody>
                  </table>
            </div>
            <div class="card-footer">
                {{$clientes->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>

