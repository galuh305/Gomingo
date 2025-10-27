<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/main');
});
Route::get('/dashboard', function () {
    return view('layout/dashboard');
});
Route::get('/login', function () {
    return view('login/v_login');
});
Route::get('/registrasi', function () {
    return view('login/v_registrasi');
});
