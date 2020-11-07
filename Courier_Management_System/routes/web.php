<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['register'=> false]);

Route::get('dashboard','DashboardController@index' )->name('dashboard');


Route::group(['as' => 'admin.','prefix' => 'admin','namespace'=>'Admin','middleware'=>['auth','admin']], function () {
            Route::get('dashboard','DashboardController@index' )->name('dashboard');
});

Route::group(['as' => 'staff.','prefix' => 'staff','namespace'=>'Staff','middleware'=>['auth','staff']], function () {
    Route::get('dashboard','DashboardController@index' )->name('dashboard');
});


Route::get('/home', 'HomeController@index')->name('home');
