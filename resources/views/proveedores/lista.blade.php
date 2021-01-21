@extends('admin.master')
@section('container')
    <h1>Lista de Proveedores</h1>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">CI</th>
            <th scope="col">Nombres</th>
            <th scope="col">Apellidos</th>
            <th scope="col">Empresa</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach(getProveedores() as $proveedor)
        <tr>
            <th scope="row">{{$proveedor->ci}}</th>
            <td>{{$proveedor->nombre}}</td>
            <td>{{$proveedor->apellido}}</td>
            <td>{{$proveedor->empresa}}</td>
            <td>

                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
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
                </div>








                <!-- Eliminar-->
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal1">
                    Eliminar
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{url('/proveedoreliminar',$proveedor->id)}}" method="put">

                            <div class="modal-body">

                                    <label for="">Esta seguro que desea eliminar el proveedor ({{$proveedor->nombre}})</label>
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
