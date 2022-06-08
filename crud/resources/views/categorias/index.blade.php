@extends('site.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 8 CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categorias.create') }}"> Crear Nueva Categoria</a>
            </div>
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
            <th>Peresible</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categorias as $categoria)
            <tr>
                <td>{{ ++$i }}</td>
                <td>{{ $categoria->nombre }}</td>
                <td>{{ $categoria->estado }}</td>
                <td>
                    <form action="{{ route('categorias.destroy', $categoria->id) }}" method="POST">

                        <a class="btn btn-info" href="{{ route('categorias.show', $categoria->id) }}">Ver</a>

                        <a class="btn btn-primary" href="{{ route('categorias.edit', $categoria->id) }}">Editar</a>

                        @csrf
                        @method('DELETE')
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
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $categorias->links() !!}
@endsection
