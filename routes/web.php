<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\MasterBarangController;
use App\Http\Controllers\TransaksiBarangController;
use phpDocumentor\Reflection\Types\Resource_;

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

// Halaman Awal
Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('admin/index');
});
Route::get('tes', function () {
    return view('tes/tes');
});

Route::resource('/barang', MasterBarangController::class);
Route::resource('/transaksi', TransaksiBarangController::class);

Auth::routes();

Route::group(['middleware' => ['web']], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
