<?php

use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\usersController;

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



Route::get('/', function() {
    return view('index');
})->name('index');

Route::get('/welcome', function() {
    return view('welcome');
})->name('welcome');


Route::get('/plan_estudios', function() {
    // return view('plan_estudios');
    // return view('EXPERIMENTAL-plan_estudios');
    return view('auxiliar');
})->name('plan_estudios');

Route::get('/estudios', function() {
    // return view('plan_estudios');
    return view('plan_estudios');
})->name('plan_estudios');

Route::get('/nab', function() {
    return view('nab');
})->name('nab');

Route::get('/requisitos', function() {
    return view('requisitos');
})->name('requisitos');

Route::get('/estudiantes', function() {
    return view('estudiantes');
})->name('estudiantes');

Route::get('/contacto', function() {
    return view('contacto');
})->name('contacto');

Route::get('/avisos-privacidad', function() {
    return view('avisos-privacidad');
})->name('avisos-privacidad');

Route::get('/users', [usersController::class, 'index']);

/*Route::get('/index', function() 
    return view('ejemplo1');
});*/
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

