<div>
    <div class="card">
        <div class="card-header">
            <input wire:model="search" class="form-control" placeholder="ingrese el nombre del animal">
        </div>
        @if ($mascotas->count())
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Peso</th>
                        <th scope="col">Sexo</th>
                        <th colspan="2"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mascotas as $mascota)
                        <tr>
                            <th scope="row">{{$mascota->id}}</th>
                            <td>{{$mascota->nombre}}</td>
                            <td>{{$mascota->peso}}</td>
                            <td>{{$mascota->sexo}}</td>
                            <td width="10px">
                                <a class="btn btn-warning btn-sm" href="{{route('admin.mascotas.edit', $mascota)}}"><i class="fas fa-edit"></i></a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.clientes.destroy', $mascota)}}" method="POST">
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
            <div class="card-footer">
                {{$mascotas->links()}}
            </div>
        @else
            <div class="card-body">
                <strong>No hay registros</strong>
            </div>
        @endif
    </div>
</div>

