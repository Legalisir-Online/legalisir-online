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

Route::get('/biodata', function () {
    return view('alumni/biodata');
});

Route::get('/profile', function () {
    return view('alumni/profile');
});

Route::get('/upload-berkas', function () {
    return view('alumni/upload-berkas');
});

Route::get('/akun-terverifikasi', function () {
    return view('aktivasi-akun');
});

Route::get('/homepage', function () {
    return view('alumni/homepage');
});

Route::get('/form-legalisir', function () {
    return view('alumni/form-legalisir');
});

Route::get('/status-ajuan1', function () {
    return view('alumni/status-ajuan1');
});

Route::get('/riwayat-ajuan', function () {
    return view('alumni/riwayat-ajuan');
});

Route::get('/invoice', function () {
    return view('alumni/invoice');
});

Route::get('/status-ajuan2', function () {
    return view('alumni/status-ajuan2');
});

Route::get('/riwayat-invoice', function () {
    return view('alumni/riwayat-invoice');
});

Route::get('/kuesioner', function () {
    return view('alumni/kuesioner');
});

Route::get('/status-ajuan3', function () {
    return view('alumni/status-ajuan3');
});

Route::get('/flow', function () {
    return view('flow');
});

Route::get('/preview-pengajuan', function () {
    return view('alumni/preview-pengajuan-legalisir');
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

Route::get('/tambah-kuesioner', function () {
    return view('admin/tambah-kuesioner');
});

Route::get('/edit-kuesioner', function () {
    return view('admin/edit-kuesioner');
});

Route::get('/validasi-berkas', function () {
    return view('admin/validasi-berkas');
});

Route::get('/administrator', function () {
    return view('administrator/administrator');
});

Route::get('/users', function () {
    return view('administrator/users');
});

Route::get('/user-admin', function () {
    return view('administrator/user-admin');
});

Route::get('/user-alumni', function () {
    return view('administrator/user-alumni');
});

Route::get('/daftar-berkas', function () {
    return view('admin/daftar-berkas');
});

Route::get('/pertanyaan', function () {
    return view('admin/pertanyaan');
});

Route::get('/pertanyaan-baru', function () {
    return view('admin/pertanyaan-baru');
});

Route::get('respon', function () {
    return view('admin/respon');
});

Route::get('about', function () {
    return view('alumni/about');
});

Route::get('profile-admin', function () {
    return view('admin/profile-admin');
});
Auth::routes();

// Route::get('profile-admin', function () {
//     return view('admin/profile-admin');
// });

Route::get('/profile-administrator', function () {
    return view('administrator/profile-administrator');
});
