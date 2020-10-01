@extends('layouts.menu')

@section('title', 'Inventario | MRP')

@section('body-class', 'landing-page')

@section('styles')
    <style>
        h1.title {
            font-size: 3rem;
        }
        ul.pagination {
            justify-content: center;
        }
        .section {
          padding: 5px !important; 
        }

    </style>
@endsection

@section('contenido-central')
<div class="main ">
    <div class="container">

        <div class="section">
            <h2 class="title text-center">Movimiento Inventario

                @can('proveedor.create')
                    <a href="{{ route('inventario.create') }}"
                    class="btn btn-sm btn-primary pull-right">
                        Crear Nuevo Movimiento...
                    </a>
                @endcan
            </h2>


            <div class="card" >
                    <table class="table">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Código</th>
                                <th>Id Almacén</th>
                                <th>Almacén</th>
                                <th>IdtipoMov</th>
                                <th>TipoMov</th>
                                <th>Estado</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($inventarios as $inventario)
                            <tr>
                                <td>{{ $inventario->id }}</td>
                                <td>{{ $inventario->codigo }}</td>
                                <td>{{ $inventario->almacen_id }}</td>
                                <td>{{ $inventario->almacenNombre }}</td>
                                <td>{{ $inventario->tipo_mov_id }}</td>
                                <td>{{ $inventario->tipoNombre }}</td>
                                <td class="list-group-item">
                                    <p class="list-group-item-text">
                                        @if($inventario->estado = 1)
                                            <span class="label label-success">Activo</span>
                                        @else
                                            <span class="label label-danger">Inactivo</span>
                                        @endif
                                    </p></td>
                                @can('inventario.show')
                                <td width="10px">
                                    <a href="{{ route('inventario.show', $inventario->id) }}"
                                    class="btn btn-sm btn-default">
                                        ver
                                    </a>
                                </td>
                                @endcan
                                @can('inventario.edit')
                                <td width="10px">
                                    <a href="{{ route('inventario.edit', $inventario->id) }}"
                                    class="btn btn-sm btn-default">
                                        editar
                                    </a>
                                </td>
                                @endcan
                                @can('inventario.destroy')
                                <td width="10px">
                                    {!! Form::open(['route' => ['inventario.destroy', $inventario->id],
                                    'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>
                                    {!! Form::close() !!}
                                </td>
                                    @endcan
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div>
                        {{ $inventarios->links() }}
                    </div>
                    
                </div>

        </div>

    </div>
        
</div>


@endsection
