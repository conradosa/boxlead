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
    return view('form');
});

Route::get('/adm', function () {
    return view('admform');
});

Route::group(['namespace' => 'App\Http\Controllers\Lead'], function () {
    Route::post('/cadastro-lead', 'CadastroController@store')->name('store.lead');
});

Route::group(['namespace' => 'App\Http\Controllers\Adm'], function () {
    Route::post('/adm-login', 'AdmController@login')->name('adm.login');
    Route::post('/adm-reset', 'AdmController@reset')->name('adm.reset');
    Route::post('/adm-generate', 'AdmController@generate')->name('adm.generate');
});
