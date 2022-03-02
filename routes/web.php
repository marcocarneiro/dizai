<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComentarioController;

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

/* Route::get('/', function () {
    return view('dizai');
}); */
Route::get('/', [ComentarioController::class, 'index'])->name('/');

Route::get('/info', function () {
    phpinfo();
});

Route::post('/novocomentario', [ComentarioController::class, 'store'])->name('novocomentario');
