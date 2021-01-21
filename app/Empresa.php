<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $table='empresas';
    protected  $primaryKey='id';
    protected  $fillable=[ 'nombre' ];

    // Relación con Pedido Compra
    public function pedidoCompra(){
        return $this->hasMany(Empresa::class, 'id_empresa');
    }
}
