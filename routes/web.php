<?php

use App\Models\Reforma;
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

Route::resource('reforma', 'App\Http\Controllers\ReformaController');
Route::resource('dorada','App\Http\Controllers\DoradaController');
Route::resource('fuerte','App\Http\Controllers\FuerteController');
Route::resource('sanangel','App\Http\Controllers\SanangelController');
Route::resource('serdan','App\Http\Controllers\SerdanController');
Route::resource('stella','App\Http\Controllers\StellaController');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),'verified'])->group(function () {
    Route::get('/dash', function () {
        return view('dash.index');
    })->name('dash');
});

Route::get('/dash', 'App\Http\Controllers\DashboardController@index');
