<?php

use App\Http\Controllers\AnimalController;
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

Route::get('/', [AnimalController::class, "index"]);

Route::get('/add', function () {
    return view("formulaire");
});


Route::get("/delete-animal/{id}", [AnimalController::class, "destroy"]);

Route::get("/show-animal/{id}", [AnimalController::class, "show"]);

Route::get("/edit-animal/{id}", [AnimalController::class, "edit"]);

Route::post("/update-animal/{id}", [AnimalController::class, "update"]);

Route::post("/animal-store", [AnimalController::class, "store"]);