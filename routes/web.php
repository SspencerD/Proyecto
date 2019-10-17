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

Route::get('/', 'TestController@welcome');

Auth::routes();

//Route::middleware(['auth','user'])->prefix('user')->namespace('user')->group(function)() {});

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


Route::middleware(['auth', 'admin'])->prefix('admin')->namespace('Admin')->group(function () {  //DEBO CREAR EL PREFIJO SUPPLY SALES PARTNERS
    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/products', 'ProductController@index'); //listar productos
    Route::get('/products/create', 'ProductController@create'); //Crear productos (ver formulario de registro)
    Route::post('/products', 'ProductController@store'); //guardar datos del usuario.
    Route::get('/products/{id}/edit', 'ProductController@edit'); // Ruta para editar los datos
    Route::post('/products/{id}/edit', 'ProductController@update'); //  la acción despues de editar el producto
    Route::delete('/products/{id}', 'ProductController@destroy');  //borra el producto

    Route::get('/products/{id}/images', 'ImageController@index');
    Route::post('/products/{id}/images', 'ImageController@store');
    Route::delete('/products/{id}/images', 'ImageController@destroy');
    Route::get('/products/{id}/images/select/{image}', 'ImageController@select'); // destacar

    Route::get('/categories', 'CategoryController@index'); //listar Categorias
    Route::get('/categories/create', 'CategoryController@create'); //Crear Categorias (ver formulario de registro)
    Route::post('/categories', 'CategoryController@store'); //guardar datos del usuario.
    Route::get('/categories/{category}/edit', 'CategoryController@edit'); // Ruta para editar los datos
    Route::post('/categories/{category}/edit', 'CategoryController@update'); //  la acción despues de editar el Categoryo
    Route::delete('/categories/{category}', 'CategoryController@destroy');  //borra el producto

});
