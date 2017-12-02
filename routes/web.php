<?php

//*** Frontend
Route::group(['namespace' => 'Front'], function(){
    Route::match(['get','post'], '/', [
        'uses' => 'IndexController@execute',
        'as'   => 'index'
    ]);
    Route::get('/home_page', [
        'uses' => 'HomePageController@index',
        'as'   => 'home_page'
    ]);
    Route::get('/about_page', [
        'uses' => 'AboutPageController@index',
        'as'   => 'about_page'
    ]);
});

//*** Adminka
Route::group([
    //'prefix'     => 'admin',
    'namespace'  => 'Admin',
    //'middleware' => 'auth'
], function(){

    Route::get('admin/index', [
        'as'   => 'admin.index',
        'uses' => 'IndexController@index'
    ]);

    Route::resource('admin/home',     'HomeController');
    Route::resource('admin/about',    'AboutController');
    Route::resource('admin/service',  'ServiceController');
    Route::resource('admin/portfolio','PortfolioController');
    Route::resource('admin/team',     'TeamController');
    Route::resource('admin/client',   'ClientController');
    Route::resource('admin/menu',     'MenuController');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
