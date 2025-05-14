<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.index');
});

Route::get('/home', function () {
    return view('layouts.index');
})->name('home');

Route::get('/gejala', function () {
    return view('gejala.index');
})->name('gejala');

Route::get('/gejala/{id}', function ($id) {
    return view('gejala.detail', ['id' => $id]);
})->name('gejala.detail');