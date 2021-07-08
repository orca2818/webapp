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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/video', function() {
    return view('video');
})->middleware(['auth'])->name('video');

Route::get('/team', function() {
    return view('team');
})->middleware(['auth'])->name('team');

Route::get('/chat', function() {
    return view('chat');
})->middleware(['auth'])->name('chat');

Route::get('/profile', function() {
    return view('profile');
})->middleware(['auth'])->name('profile');

Route::get('/setting', function() {
    return view('setting');
})->middleware(['auth'])->name('setting');

Route::get('/password', function() {
    return view('password');
})->middleware(['auth'])->name('password');


require __DIR__.'/auth.php';
