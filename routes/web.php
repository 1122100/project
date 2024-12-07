<?php

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

Route::get('/cek', function () {
    return view('client.home.index');
});

Route::get('/login', function () {
    return view('auth.login.index');
});

Route::get('/about', function () {
    return view('client.detail.about');
});

Route::get('/collection', function () {
    return view('client.detail.collection');
});

Route::get('/shop', function () {
    return view('client.detail.shop');
});

Route::get('/contact', function () {
    return view('client.detail.contact');
});

Route::get('/admin', function () {
    return view('admin.dashboard.index');
});

use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm']);
Route::post('/register', [RegisterController::class, 'register']);
Route:: get('/home', function() {
    return view('client.home.index'); //masuk ke halaman utama
})->name('home');
