<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



////ROTA PARA CONSULTAR O CEP
//Route::apiResource('/search/local/', 'ConsultaCepController');
Route::get('/search/local/', 'ConsultaCepController@index');
Route::get('/search/local/{cep}', 'ConsultaCepController@show');

