<?php

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

// route ini sebagai index awal saat masuk website, file yg di panggil adalah file app.blade.php di folder views\Home
// Route::get('/', function () {
//     return view('\index\app');
// });

Route::get('/', function () {
    return view('\home\home');
});

Route::get('/location', function () {
    return view('\location\index');
});

Route::get('/location/bali', function () {
    return view('\location\bali');
});

Route::get('/product', function () {
    return view('\location\index');
});

Route::get('/about', function () {
    return view('\about\about');
});

Route::get('/about/about', [JoinController::class, 'about'])->name('about.about');
Route::get('/location/index', [JoinController::class, 'index'])->name('location.index');