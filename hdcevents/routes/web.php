<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);

Route::post('events', [EventController::class, 'store']);
Route::get('/events/{id}', [EventController::class, 'show']);





Route::get('/contact', function () {

    $nome = "Ruan";
    return view('contatc', ["nome" => $nome]);
});

Route::get('/produtos/{id}/{name?}', function ($id =1, $name= ""){

    return view('products', ['id' => $id, 'name' => $name]);
});
