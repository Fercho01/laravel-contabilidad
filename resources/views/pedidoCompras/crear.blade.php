@extends('admin.master')
@section('container')
    <h1>Registrar Pedido Compra</h1>

    <form action="{{ route('pedidoCompras.crear') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <input name="descripcion" type="text" class="form-control" id="descripcion" aria-describedby="emailHelp" placeholder="Ingresar la descripcion">
        </div>
        <div class="form-group">
            <label for="id_empresa">Empresas:</label>
            <select name="id_empresa" id="id_empresa"  class="form-control" data-live-search="true" data-size="3" data-dropup-auto="false">
                <option value="0">Seleccione:</option>
                @foreach ($empresas as $empresa)
                    <option value="{{$empresa->id}}">{{$empresa->nombre}}</option>
                @endforeach
            </select>
        </div>


        <div class="form-group">
            <label for="id_proveedor">Proveedores:</label>
            <select name="id_proveedor" id="id_proveedor"  class="form-control selectpicker" data-live-search="true" data-size="3" data-dropup-auto="false">
                <option value="0">Seleccione:</option>
                @foreach ($proveedores as $proveedor)
                    <option value="{{$proveedor->id}}">{{$proveedor->nombre}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Registrar Pedido Compra</button>
        <a type="" href="{{ route('pedidoCompras.index') }}" class="btn btn-info">Volver</a>
    </form>


@endsection
