@extends('admin.master')
@section('container')
    <h1>Registra Proveedor</h1>

    <form action="{{url('/proveedorcrear')}}" method="post">
    {{csrf_field()}}
        <div class="form-group">
            <label for="exampleInputEmail1">Nombre</label>
            <input name="nombre" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresar el nombre">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Apellido</label>
            <input name="apellido" type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el apellido">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Carnet de Identidad</label>
            <input name="ci" type="number" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el carnet de Identidad">
        </div>

        <div class="form-group">
            <label for="exampleInputPassword1">Empresa</label>
            <input name="empresa" type="text" class="form-control" id="exampleInputPassword1" placeholder="Ingresa el nombre de la empresa">
        </div>
        <button type="submit" class="btn btn-primary">Registrar Proveedor</button>
    </form>


@endsection
