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

Route::get('/','App\Http\Controllers\CompanyController@index');

Route::get('/imoniu-sarasas','App\Http\Controllers\CompanyController@companylist')->name('imoniu-sarasas');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['App\Http\Middleware\Authenticate'])->group(function () {

        Route::get('/nauja-imone','App\Http\Controllers\CompanyController@newcompany')->name('nauja-imone');

        Route::post('/save-company','App\Http\Controllers\CompanyController@savecompany')->name('save-company');

        Route::get('/panaikinti/{id}','App\Http\Controllers\CompanyController@deletecompany')->name('panaikinti');

        Route::get('/redaguoti/{id}','App\Http\Controllers\CompanyController@editcompany')->name('redaguoti');

        Route::post('/edit-save/{id}','App\Http\Controllers\CompanyController@saveeditcompany')->name('save-edit-company');
});






