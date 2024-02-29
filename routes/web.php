<?php

use App\Http\Controllers\MyFirstController;
use App\Http\Controllers\estudiantesController;
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

Route::get('/students',[MyFirstController::class,"index"]); #json



Route::get("/estudiantes",[estudiantesController::class,"index"]);
Route::get("/formestudent",[estudiantesController::class,"create"]);
Route::post("/store",[estudiantesController::class,'store'])->name('store');
Route::get("/editar/{id}",[estudiantesController::class,"edit"])->name('editar');
Route::put("/update/{id}/edit",[estudiantesController::class,"update"])->name('update');
Route::get("/show/{id}",[estudiantesController::class,"show"])->name('show');
Route::get("/eliminar/{id}",[estudiantesController::class,"destroy"])->name('eliminar');






