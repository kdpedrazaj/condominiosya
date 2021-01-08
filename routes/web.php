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

// Route::get('/', function () {
//     return view('welcome');
// })->name('home');

Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
    return view('home');
})->name('Inicio');

Route::view('/register', 'auth/register')->name('Registrar');

Route::view('/accountstate', 'app/accountstate')->name('Estado de Cuenta');
Route::view('/receipt', 'app/receipt')->name('Recibos');
Route::view('/payment', 'app/payment')->name('Pagos');
Route::view('/reserve', 'app/reserve')->name('Reservar');
Route::view('/billboard', 'app/billboard')->name('Cartelera');
