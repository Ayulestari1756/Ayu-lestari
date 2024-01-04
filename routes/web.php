<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
//Route::get('/home', 'HomeController@index');


Route::get('/about', function () {
    $data = [
        'pageTitle' => 'Tentang Kami',
        'content' => 'Ini adalah halaman tentang kami.'
    ];
    return view('about', $data);
});

//Route::get('/produk', 'App\Http\Controllers\ProdukController@index');

//Route::resource('produk', ProdukController::class, ['except' => [
// 'create', 'update', 'delete', 'show'
//]]);

//route::get('/profile', function () {
//$nama = "ayu lestari";
//return view('profile', compact('nama'));

//});
Route::resource('/profile', App\Http\Controllers\ProfileController::class);


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('/buku', App\Http\Controllers\BukuController::class);

// Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'user', 'admin'])->group(function () {
    Route::resource('/produk', App\Http\Controllers\ProdukController::class);
    Route::get('admin', function () {
        return 'admin page';
    });

Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});
