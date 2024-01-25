<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/abertura_conta', function(){
    return view('abertura_conta');
});
Route::get('/painel_reservado', function(){
    return view('painel_reservado');
});
Route::post('/lista_espera', function(){
    return view('lista_espera');
});
Route::get('/lista_atendidos', function(){
    return view('lista_atendidos');
});
Route::get('/login_funcionario', function(){
    return view('login_funcionario');
});
// // Escryption
// Route::get('/', function () {
//     return view('welcome');
// });

// // Desencryption
// Route::get('/', function () {
//     return view('welcome');
// });
