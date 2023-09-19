<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

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

Route::get('hola', function () {
    return 'Hola Mundo!';
});

Route::get('saludo/{nombre}', function ($nombre) {
    return 'Como estas '.$nombre;
})->where('nombre', '[A-Za-z]+'); 

Route::get('demo', [DemoController::class, 'saludar']);
Route::get('saludar/{nombre}', [DemoController::class, 'saludos']);
Route::get('vista/{nombre}', [DemoController::class, 'vista']);







