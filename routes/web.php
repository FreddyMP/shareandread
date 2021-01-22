<?php

use Illuminate\Support\Facades\Route;
use App\Historia;
use App\Genero;


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
Route::get('/home', function () {
    $list_historias = Historia::all();
    $generos = Genero::all();
    return view('home', compact('list_historias','generos') );
});
Route::get('/perfil', function () {
    $list_historias = Historia::where('creador','test')->get();
    
    return view('perfil', compact('list_historias'));
});
Route::get('/seguidores', function () {
    return view('seguidores');
});
Route::get('/seguidos', function () {
    return view('seguidos');
});
Route::get('/historia_ready', function () {
    return view('historia_ready');
});
Route::get('/mensajes', function () {
    return view('mensajes');
});

Route::resource('historias', 'historiasController');