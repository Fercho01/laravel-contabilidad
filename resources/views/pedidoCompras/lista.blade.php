@extends('admin.master')
@section('container')
    <h1 style="display: inline-block">Lista de Pedido Compras</h1>
        <a href="{{route('pedidoCompras.registrar')}}">
            <button class="btn btn-success" style="margin-bottom: 12px"><i class="fa fa-plus"></i> Nuevo</button>
        </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Descripción</th>
            <th scope="col">Empresa</th>
            <th scope="col">Proveedor</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($pedidoCompras as $pedido)
        <tr>
            <th scope="row">{{$pedido->id}}</th>
            <td> {{ $pedido->descripcion }}</td>
            <td> {{ $pedido->empresa->nombre  }}      </td>
            <td> {{ $pedido->proveedor->nombre   }}</td>
            <td>

                {{-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Actualizar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        {{csrf_field()}}

                        <form action="{{url('/proveedoractualizar',$proveedor->id)}}" method="PUT">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Actualizar </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Nombre</label>
                                        <input name="nombre" value="{{$proveedor->nombre}}"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar el nombre">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Apellido</label>
                                        <input name="apellido" value="{{$proveedor->apellido}}" type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el apellido">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Carnet de Identidad</label>
                                        <input name="ci" value="{{$proveedor->ci}}" type="number" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el carnet de Identidad">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Empresa</label>
                                        <input name="empresa" value="{{$proveedor->empresa}}"  "text" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el nombre de la empresa">
                                    </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">Actualizar Proveedor</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div> --}}








                <!-- Eliminar-->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCompra1">
                    Eliminar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCompra1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelCompra" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabelCompra">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('pedidoCompras.delete',['id' => $pedido->id]) }}" method="GET">
                                @csrf
                                <div class="modal-body">

                                        <label for="">Esta seguro que desea eliminar la pedido ({{$pedido->id}})</label>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-danger">Eliminar</button>

                                </div>
                            </form>

                        </div>

                    </div>
                </div>

        </tr>
        @endforeach



        </tbody>
    </table>

@endsection
