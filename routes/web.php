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

Route::get('/riwayat-ajuan', function () {
    return view('riwayat-ajuan');
});

Route::get('/invoice', function () {
    return view('invoice');
});

Route::get('/status-ajuan2', function () {
    return view('status-ajuan2');
});

Route::get('/riwayat-invoice', function () {
    return view('riwayat-invoice');
});

Route::get('/kuisioner', function () {
    return view('kuisioner');
});

Route::get('/status-ajuan3', function () {
    return view('status-ajuan3');
});

Route::get('/preview-pengajuan', function () {
    return view('preview-pengajuan-legalisir');
});

Route::get('/admin', function () {
    return view('admin/admin');
});

Route::get('/daftar-ajuan-legalisir', function () {
    return view('admin/daftar-ajuan-legalisir');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/legalisir-selesai', function () {
    return view('admin/legalisir-selesai');
});

Route::get('/berkas-selesai', function () {
    return view('admin/berkas-selesai');
});

Route::get('/legalisir-pending', function () {
    return view('admin/legalisir-pending');
});

Route::get('/legalisir-gagal', function () {
    return view('admin/legalisir-gagal');
});

Route::get('/berkas-tidak-valid', function () {
    return view('admin/berkas-tidak-valid');
});

Route::get('/kuesioner-admin', function () {
    return view('admin/kuesioner');
});

Route::get('/berkas-pending', function () {
    return view('admin/berkas-pending');
});

Route::get('/edit-ajuan', function () {
    return view('admin/edit-ajuan');
});
