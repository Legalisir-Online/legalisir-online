<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landing-page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/reset-password', function () {
    return view('reset-password');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/register', function () {
    return view('register');
});

Route::get('/upload-berkas', function () {
    return view('upload-berkas');
});

Route::get('/akun-terverifikasi', function () {
    return view('aktivasi-akun');
});

Route::get('/homepage', function () {
    return view('homepage');
});

Route::get('/form-legalisir', function () {
    return view('form-legalisir');
});

Route::get('/status-ajuan1', function () {
    return view('status-ajuan1');
});

Route::get('/invoice', function () {
    return view('invoice');
});