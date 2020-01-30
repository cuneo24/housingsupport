<?php

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

Route::get('/', 'HomeController@show');

Route::get('/residences', 'ResidenceController@show');

Route::get('/directors', 'DirectorController@show');

Route::get('/partners', 'PartnerController@show');

Route::get('/about', 'AboutController@show');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin/', 'AboutController@showAdmin');

    Route::get('/admin/about', 'AboutController@showAdmin');
    Route::get('/admin/about/edit', 'AboutController@edit');
    Route::put('/admin/about/update', 'AboutController@update');

    Route::get('/admin/home', 'HomeController@showAdmin');
    Route::get('/admin/home/edit', 'HomeController@edit');
    Route::put('/admin/home/update', 'HomeController@update');

    Route::get('/admin/directors', 'DirectorController@showAdmin');
    Route::get('/admin/partners', 'PartnerController@showAdmin');
    Route::get('/admin/residences', 'ResidenceController@showAdmin');

    Route::get('/admin/director/add', 'DirectorController@add');
    Route::get('/admin/partner/add', 'PartnerController@add');
    Route::get('/admin/residence/add', 'ResidenceController@add');

    Route::get('/admin/director/{id}/edit', 'DirectorController@edit');
    Route::get('/admin/partner/{id}/edit', 'PartnerController@edit');
    Route::get('/admin/residence/{id}/edit', 'ResidenceController@edit');

    Route::get('/admin/director/{id}/delconfirm', 'DirectorController@delConfirm');
    Route::get('/admin/partner/{id}/delconfirm', 'PartnerController@delConfirm');
    Route::get('/admin/residence/{id}/delconfirm', 'ResidenceController@delConfirm');

    Route::post('/admin/director/store', 'DirectorController@store');
    Route::post('/admin/partner/store', 'PartnerController@store');
    Route::post('/admin/residence/store', 'ResidenceController@store');

    Route::put('/admin/director/{id}/update', 'DirectorController@update');
    Route::put('/admin/partner/{id}/update', 'PartnerController@update');
    Route::put('/admin/residence/{id}/update', 'ResidenceController@update');

    Route::delete('/admin/director/{id}/delete', 'DirectorController@delete');
    Route::delete('/admin/partner/{id}/delete', 'PartnerController@delete');
    Route::delete('/admin/residence/{id}/delete', 'ResidenceController@delete');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
