<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SewaController;
use App\Http\Controllers\HomeController;


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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [LoginController::class, 'login'])->name('login')->middleware('guest');
Route::post('/', [LoginController::class, 'auth']);

Route::get('/register', [RegisterController::class, 'create']);
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home', [HomeController::class, 'index'])->middleware('auth');
// Route::post('/logout', function () {
//     auth()->logout();
//     request()->session()->invalidate();
//     request()->session()->regenerateToken();
//     return redirect('/');
// })->name('logout');
// routes/web.php



// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/myblog', function () {
    return view('myblog');
});

Route::get('/artis', function () {
    return view('artis');
});

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/hits', function () {
    return view('hits');
});


Route::get('/tamu', 'TamuController@index')->name('tamu.index');
Route::post('/tamu', 'TamuController@store')->name('tamu.store');
Route::get('/komentar', 'KomentarController@index')->name('komentar.index');
Route::post('/komentar', 'KomentarController@store')->name('komentar.store');

