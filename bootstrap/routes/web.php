<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;

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
// Ovde nam se nalaze sve rute koje smo kreirali

Route::get('/login', function() {
    return view('login');

});
Route::get('/logout', function() {
    Session::forget('user');
    return redirect('login');

});

Route::view('/registracija', 'registracija');



Route::post("/login",[UserController::class, 'login']);
Route::post("/registracija",[UserController::class, 'registracija']);
Route::get("/", [ProductController::class, 'index']);
Route::get("opis/{id}", [ProductController::class, 'opis']);
Route::get("pretraga", [ProductController::class, 'pretraga']);
Route::post("dodaj_u_korpu", [ProductController::class, 'dodajUKorpu']);
Route::get("korpaLista", [ProductController::class, 'korpaLista']);
Route::get("uklonjenaStavka/{id}", [ProductController::class, 'ukloniIzKorpe']);
Route::get("naruci", [ProductController::class, 'naruciProizvod']);
Route::post("narucistrana", [ProductController::class, 'naruciStrana']); 
Route::get("mojeporudzbine", [ProductController::class, 'mojePorudzbine']); //ne prikazuje nista jos uvek jer nemam nijednu porudzbinu


