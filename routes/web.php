<?php

use App\Http\Controllers\UserController;
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
    //return view('welcome');
    return view('/user/login');
});

Route::get('/user', [UserController::class, 'index']);
Route::get('/user/{id}', [UserController::class, 'show']);
Route::post('/user/edit/{id}', [UserController::class, 'edit']);
Route::delete('/user/delete/{id}', [UserController::class, 'delete']);
Route::put('/user/update/{id}', [UserController::class, 'update']);

Route::post('/home', [UserController::class, 'home']);