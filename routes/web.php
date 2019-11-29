<?php

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

<<<<<<< HEAD
use App\Http\Controllers\Admin\ClaimController as AppClaimController;
use App\Http\Controllers\Partner\ClaimController;

Route::get('/', 'TestController@welcome');
=======
use App\Http\Controllers\Partner\ClaimController;

Route::get('/', 'TestController@welcome'); 
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c

Auth::routes();



Route::get('/search', 'SearchController@show');
Route::get('/products/json', 'SearchController@data');

//Route perfiles registrado
Route::get('/perfil', 'TestController@perfil'); //perfil de  usuario ..
Route::get('/products/{id}', 'ProductController@show'); // Ruta para mostrar detalles del producto.
Route::post('/cart', 'CartDetailController@store'); //Almacena los productos cargados al carrito de compras
Route::delete('/cart', 'CartDetailController@destroy'); //elimina un producto del carrito

Route::get('/categories/{category}', 'CategoryController@show'); // Ruta para mostrar detalles del categorias.




//ruta para generar la orden de compra de un carrito de compra (se podra utilizar el mismo metodo para la orden de compra interna.
Route::post('/order', 'CartController@update');


<<<<<<< HEAD
Route::middleware(['auth', 'admin'])->prefix('admin','partner')->namespace('Admin')->group(function () {  //DEBO CREAR EL PREFIJO SUPPLY SALES PARTNERS

    Route::get('/dashboard', 'DashboardController@index'); //muestra panel de Admins , proveedores y otros.


    //conjunto de rutas para Usuarios
    Route::get('/users', 'UserController@index'); // listar todos los usuarios.
    Route::get('/users/create', 'UserController@create'); // vista para crear usuarios.
    Route::post('/users', 'UserController@store'); // guarda los datos de usuarios..
    Route::get('/users/{id}/edit', 'UserController@edit'); // Ruta para editar los datos
    Route::post('/users/{id}/edit', 'UserController@update'); //  la acción despues de editar los usuarios
    Route::delete('/users/{id}', 'UserController@destroy');

=======
Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {  //DEBO CREAR EL PREFIJO SUPPLY SALES PARTNERS
    
    Route::get('/dashboard', 'DashboardController@index'); //muestra panel de Admins , proveedores y otros.


    //conjunto de rutas para Usuarios
    Route::get('/users', 'UserController@index'); // listar todos los usuarios.
    Route::get('/users/create', 'UserController@create'); // vista para crear usuarios.
    Route::post('/users', 'UserController@store'); // guarda los datos de usuarios..
    Route::get('/users/{id}/edit', 'UserController@edit'); // Ruta para editar los datos
    Route::post('/users/{id}/edit', 'UserController@update'); //  la acción despues de editar los usuarios
    Route::delete('/users/{id}', 'UserController@destroy');

>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
    // conjunto de rutas para productos.
    Route::get('/products', 'ProductController@index'); //listar productos
    Route::get('/products/create', 'ProductController@create'); //Crear productos (ver formulario de registro)
    Route::post('/products', 'ProductController@store'); //guardar datos del usuario.
    Route::get('/products/{id}/edit', 'ProductController@edit'); // Ruta para editar los datos
    Route::post('/products/{id}/edit', 'ProductController@update'); //  la acción despues de editar el producto
    Route::delete('/products/{id}', 'ProductController@destroy');  //borra el producto
    Route::get('/products/{id}/images', 'ImageController@index'); // trae la imagen especifica por producto
    Route::post('/products/{id}/images', 'ImageController@store'); // almacena la imagen especifica por producto
    Route::delete('/products/{id}/images', 'ImageController@destroy'); // destruye o elimina la imagen del producto especifico.
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar la imagen del producto.

    //conjunto de rutas para categorias
    Route::get('/categories', 'CategoryController@index'); //listar Categorias
    Route::get('/categories/create', 'CategoryController@create'); //Crear Categorias (ver formulario de registro)
    Route::post('/categories', 'CategoryController@store'); //guardar datos del usuario.
    Route::get('/categories/{category}/edit', 'CategoryController@edit'); // Ruta para editar los datos
    Route::post('/categories/{category}/edit', 'CategoryController@update'); //  la acción despues de editar el Categoryo
    Route::delete('/categories/{category}', 'CategoryController@destroy');  //borra el producto

    //Vista de pedidos realizado

<<<<<<< HEAD
    //Reclamos
    Route::get('/claims','ClaimController@index'); // vista del lado del supervisor...
    Route::get('/claims/{id}/edit','ClaimController@edit');



    //Solicitud de Compras


    // Portal proveedores
=======
    //Solicitud de Compras


    // Bodegas
    Route::get('/warehouse','WarehouseController@index'); //vista de las bodegas disponibles.
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c


    //Autorizaciónes Roles



});
<<<<<<< HEAD

//ruta reclamos vista Cliente
Route::group(['middleware'=>'auth','namespace' =>'Partner'], function ()
{

    Route::get('/claims','ClaimController@index');//->middleware('partner'); // ventana de reclamos
    Route::get('/claims/show','ClaimController@show');// muestra el reclamo realizado.
    Route::get('/claims/create','ClaimController@create');//
    Route::post('/claims/create','ClaimController@store'); // Guarda el reclamo.
    Route::get('/claims/edit','ClaimController@edit');//
=======
Route::group(['middleware'=>'auth','namespace' =>'Partner'], function ()
{
     //Reclamos

    Route::get('/claims','ClaimController@index');//->middleware('partner'); // ventana de reclamos
    Route::get('/claims/show','ClaimController@show'); // Muestra el reclamo seleccionado.
    Route::get('/claims/create','ClaimController@create');// 
    //Route::post('/claims/create','ClaimController@store');// 
    Route::get('/claims/edit','ClaimController@edit');// 
>>>>>>> fbbf775543462cb6dd1e3b41b30825a8ee22643c
   // Route::post('/claims/{}/edit','ClaimController@update');
    //Route::delete('/claims/{}','ClaimController@store');//  d


});

