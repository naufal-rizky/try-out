<?php

use App\Models\Produk;
use App\Http\Controllers\ProdukController;
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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

//route untuk role
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::view('/admin','admin')->name('admin');
Route::view('/toko','produk.index', [
    'produks' => Produk::all()
])->name('toko');
Route::view('/bank','bank')->name('bank');

Route::resource('produk', ProdukController::class)->except('show');
