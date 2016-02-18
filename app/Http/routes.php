<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'plazasController@inicio');
Route::get('/listaPlazas', 'plazasController@index');
Route::get('/crearPlaza', 'plazasController@paginaCrear');
Route::get('/modificarPlaza', 'plazasController@paginaModificar');

Route::post('/crearPlaza', [
    'as' => 'crearPlaza',
    'uses' => 'plazasController@crear'
]);

Route::put('/modificarPlaza', [
    'as' => 'modificarPlaza',
    'uses' => 'plazasController@modificar'
]);

Route::get('/{id}', [
    'as' => 'eliminarPlaza',
    'uses' => 'plazasController@eliminar'
]);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
