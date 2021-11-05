<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\PembelianController;

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

route::get('/redirects',[HomeController::class,"index"]);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

route::get('/kasir',[KasirController::class,"index"])->name('kasir');
route::get('/invoice/{no_order}',[KasirController::class,"invoice"])->name('invoice');
route::get('/pembelian',[PembelianController::class,"index"])->name('pembelian');

