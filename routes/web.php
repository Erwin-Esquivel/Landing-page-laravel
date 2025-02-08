<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/index', function () {
    return view('index');
})->name('index');

Route::get('/preguntas', function () {
    return view('preguntas');
})->name('preguntas');

Route::get('/login', function() {
    return view('login');

})->name('login');

Route::get('/info', function(){
    return view('info');
})->name('info');