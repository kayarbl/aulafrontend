<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\imcController;

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

Route::get('/imc', [imcController::class, 'index']);

Route::get('/imc/calcularImc', [imcController::class, 'calcular'])->name('imc.calcular');

Route::post('/imc/store',[ImcController::class,'store'])->name('imc.store');

Route::delete('/imc/show/{id}', [ImcController::class,'destroy'])->name('imc.delete');

Route::put('/imc/show/{id}', [ImcController::class, 'update'])->name('imc.update');

Route::get('/imc/show',[ImcController::class,'show'])->name('imc.show');