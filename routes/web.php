<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JurusanController;

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
// });


// Route::get('/tes-git', function () {
//     return "Hallo, ini cuma coba pakai git";
// });


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/jurusan', [JurusanController::class, 'index']);

Route::get('/mahasiswa', [JurusanController::class, 'index']);