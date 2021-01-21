<?php
function getProveedores(){
    error_log('Aciedo');
    return \App\Proveedor::where([['empresaId',\Illuminate\Support\Facades\Auth::user()->empresaId],['estado',0]])->get();
}

function getUsers(){
    error_log('Aciedo');
    return \App\User::where('empresaId',\Illuminate\Support\Facades\Auth::user()->empresaId)->get();
}
function getRoles(){
    return \App\Rol::all();
}
