<?php

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
Route::get('/contact', function () {

    $nome = "Ruan";
    return view('contatc', ["nome" => $nome]);
});

Route::get('/produtos/{id}/{name?}', function ($id =1, $name= ""){

    return view('products', ['id' => $id, 'name' => $name]);
});