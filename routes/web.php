<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\VagasController;

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

Route::get('/cadastro/candidato', [CandidatosController::class, '']);

Route::get('/cadastro/vagas', [VagasController::class, '']);



Route::get('/candidato/{nome}', );

Route::get('/vaga/{vaga}',);


