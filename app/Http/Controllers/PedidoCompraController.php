<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\PedidoCompra;
use App\Proveedor;
use Illuminate\Http\Request;

class PedidoCompraController extends Controller
{
    public  function  index(){
        $pedidoCompras = PedidoCompra::with('empresa')
            ->with('proveedor')
            ->where('estado','=',1)
            ->get();
        return view('pedidoCompras.lista', ['pedidoCompras' => $pedidoCompras]);
    }
    public  function registrar(){
        $proveedores = Proveedor::all();
        $empresas = Empresa::all();
        return view('pedidoCompras.crear',['proveedores' => $proveedores , 'empresas' => $empresas]);
    }
    // 'id_empresa','id_proveedor'];
    public function create(Request $request){
        $this->validate($request,[
            'descripcion' =>'required',
            'id_empresa' => 'required',
            'id_proveedor' => 'required',
        ]);
            PedidoCompra::create($request->all());
        return redirect()->route('pedidoCompras.index');
    }

    /* public function update(Request $request,$id){

    } */
    public function delete($id){
        $pedido = PedidoCompra::findOrFail($id);
        $pedido->estado = 0;
        $pedido->save();
        return redirect()->route('pedidoCompras.index');
    }
}
