<?php

use App\Http\Controllers\PageController;
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

Route::get('/page/sejarah', [PageController::class, 'showSejarah'])->name('page-sejarah');
Route::get('/page/strukturOrganisasi', [PageController::class, 'showOrganisasi'])->name('page-organisasi');
Route::get('/page/kotakSaran', [PageController::class, 'showSaran'])->name('page-saran');
Route::get('/page/galery', [PageController::class, 'showGalery'])->name('page-galery');
