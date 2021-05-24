<?php

Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
//Route::get('/portfolio',[\App\Http\Controllers\PortfolioController::class,'__invoke'])->name('portfolio');
Route::get('/portfolio','App\Http\Controllers\PortfolioController@index')->name('portfolio');
Route::view('/contact','contact')->name('contact');

Route::post('contact', 'App\Http\Controllers\MessagesController@store');
//Route::resource('proyectos', '\App\Http\Controllers\PortfolioController');