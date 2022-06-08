@extends('site.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('productos.create') }}"> Crear Nuevo Producto</a>
            </div>
            <br>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Categoria</th>
            <th>Valor</th>
            <th>Fecha Expiracion</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($productos as $producto)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->categoria }}</td>
            <td>{{ $producto->valor }}</td>
            <td>{{ $producto->fecha_exp }}</td>
            <td>
                <form action="{{ route('productos.destroy',$producto->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('productos.show',$producto->id) }}">Ver</a>
    
                    <a class="btn btn-primary" href="{{ route('productos.edit',$producto->id) }}">Editar</a>
   
                    @csrf
                    @method('DELETE')
      
                    {{-- <button type="submit" class="btn btn-danger" >Eliminar</button> --}}

                    


                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">
                       Eliminar
                      </button>
                    
                      <!-- The Modal -->
                      <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                          <div class="modal-content">
                          
                            <!-- Modal Header -->
                            <div class="modal-header">
                              <h4 class="modal-title">Confirmación</h4>
                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            
                            <!-- Modal body -->
                            <div class="modal-body">
                              Esta 100% seguro de eliminar el registro ?
                            </div>
                            
                            <!-- Modal footer -->
                            <div class="modal-footer">
                              <button type="button" class="btn btn-warning" data-dismiss="modal">Cancelar</button>
                              <button type="submit" class="btn btn-danger" >Eliminar</button>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                      
                    </div>
                        </div>
                    </div>
                </div>
            </div><!--fin modal-->

                    
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {{-- {!! $productos->links() !!} --}}
      
@endsection