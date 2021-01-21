<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/proveedor' , 'ProveedorController@index' );

Route::get('/proveedorcrear' , 'ProveedorController@registrar');
Route::post('/proveedorcrear','ProveedorController@create');
Route::get('/proveedoractualizar/{id}' , 'ProveedorController@update');
Route::get('/proveedoreliminar/{id}','ProveedorController@delete');

Route::get('usuario','UsuarioController@index');
Route::get('/usuariocrear' , 'UsuarioController@registrar');
Route::post('/usuariocrear','UsuarioController@create');
Route::get('/usuariorol/{id}', 'UsuarioController@rol');

Route::get('todo' , function (){
    return view('proveedores.lista');
});


// Pedido Compra
Route::get('pedidocompraindex','PedidoCompraController@index')->name('pedidoCompras.index');
Route::get('/pedidocompra/create' , 'PedidoCompraController@registrar')->name('pedidoCompras.registrar');
Route::post('/pedidocompra','PedidoCompraController@create')->name('pedidoCompras.crear');
Route::get('/pedidocompra/{id}' , 'PedidoCompraController@update')->name('pedidoCompras.update');
Route::get('/pedidocompra/{id}','PedidoCompraController@delete')->name('pedidoCompras.delete');




Route::get('/test3',function (){
    $user = new App\User();//son los datos de la tabla users.
    $user->name = 'Admin';
    $user->email = 'admin@gmail.com';
    $user->password = bcrypt('123123');//encripta contraseñas
    $user->ci = 9778121;
    $user->empresaId = 1;
    $user->rolId = 1;
    $user->save();
    return $user;
});
