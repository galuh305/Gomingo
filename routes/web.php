<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/main');
});
Route::get('/home', function () {
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
Route::get('/jelajahi', function () {
    return view('screens/petawisata');
});
Route::get('/tourguide', function () {
    return view('screens/tourguide');
});
Route::get('/event', function () {
    return view('screens/event');
});
Route::get('/datawisata', function () {
    return view('data/v_dashboard');
});
Route::get('/daftarwisata', function () {
    return view('data/v_wisata');
});
Route::get('/daftartourguide', function () {
    return view('data/v_tourguide');
});
Route::get('/daftarevent', function () {
    return view('data/v_event');
});
