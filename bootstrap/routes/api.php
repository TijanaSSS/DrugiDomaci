<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\VrstaController;

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

//Moramo rute pisati na ovaj nacin, da bi API vratio podatke u JSON formatu

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get("listaproizvoda", [ProductController::class, 'listaProizvoda']);
Route::get("listavrste", [VrstaController::class, 'listaVrsta']);
Route::get("listaproizvoda/{id?}", [ProductController::class, 'listaProizvodaID']); //id je opcioni
Route::get("listavrste/{id?}", [VrstaController::class, 'listaVrstaID']); //id je opcioni

//post metoda, kada zelimo da posaljemo neke podatke iz front-enda do back-enda

Route::post('dodajproizvod', [ProductController::class, 'dodajProizvod']);
Route::delete('izbrisiproizvod{id}', [ProductController::class, 'izbrisiProizvod']);