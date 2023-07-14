<?php

// use ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\BiodataController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardAdminController;
use App\Http\Controllers\KuisionerAlumniController;
use App\Http\Controllers\PreviewPengajuanController;
use App\Http\Controllers\ValidasiBerkasController;
use App\Http\Controllers\AjuanLegalisirController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController as InvoiceControllerAlias;
use App\Http\Controllers\KuesionerAdminController;
use App\Http\Controllers\LegalisirController;
use Illuminate\Support\Facades\Route as RouteFacade;
use Illuminate\Support\Facades\Auth as AuthFacade;

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
// Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::post('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/', function () {
    return view('landing-page');
});

// Route::get('/biodata', function () {
//     return view('alumni/biodata');
// });
// ->middleware('role:alumni');

Route::get('/biodata', [BiodataController::class, 'index'])->middleware('role:alumni');

Route::post('/biodata', [BiodataController::class, 'store'])->name('biodata.store');

// Route::get('/profile', [ProfileController::class, 'data'] ); nggak dipakai ya, pakai yg alumnicontroller
// Route::get('/profile/{id}', [AlumniController::class, 'getAlumniById']);


Route::get('/upload-berkas', function () {
    return view('alumni/upload-berkas');
});
// ->middleware('role:alumni');

Route::get('/akun-terverifikasi', function () {
    return view('aktivasi-akun');
});

Route::middleware('role:alumni')->group(function () {
    Route::get('/homepage', [HomeController::class, 'alumni_index'])->name('alumni.index');
    Route::get('/form-legalisir', [HomeController::class, 'alumni_form_legalisir'])->name('alumni.form-legalisir');
    Route::post('/upload-berkas', [LegalisirController::class, 'store'])->name('legalisir.store');
    Route::post('/ajuan', [LegalisirController::class, 'ajuan'])->name('legalisir.ajuan');
});

Route::middleware('role:admin_prodi')->group(function () {
    Route::get('/admin_prodi', [LegalisirController::class, 'admin_index'])->name('admin.legalisir.index');
    Route::get('/admin_prodi/edit/{id}', [LegalisirController::class, 'admin_edit'])->name('admin.legalisir.edit');
    Route::put('/admin_prodi/edit/{id}/update', [LegalisirController::class, 'admin_update'])->name('admin.legalisir.update');
    Route::get('/daftar-ajuan-legalisir', [LegalisirController::class, 'admin_legalisir_index'])->name('admin.legalisir.index');
    Route::get('/edit-ajuan/{id}', [LegalisirController::class, 'admin_legalisir_edit'])->name('admin.legalisir.edit');

    Route::get('/daftar-berkas', [LegalisirController::class, 'admin_berkas_index'])->name('admin.berkas.index');
    Route::get('/validasi-berkas/{id}', [LegalisirController::class, 'admin_berkas_edit'])->name('admin.berkas.edit');
    Route::put('/validasi-berkas/{id}/valid', [LegalisirController::class, 'admin_berkas_update_valid'])->name('admin.berkas.update.valid');
    Route::put('/validasi-berkas/{id}/invalid', [LegalisirController::class, 'admin_berkas_update_invalid'])->name('admin.berkas.update.invalid');
});

Route::get('/form-legalisir', function () {
    return view('alumni/form-legalisir');
});
// ->middleware('role    :alumni');

Route::get('/status-ajuan1', function () {
    return view('alumni/status-ajuan1');
});
// ->middleware('role:alumni');

Route::get('/riwayat-ajuan/{id}', [DocumentController::class, 'getDataRiwayatAjuan']);
// ->middleware('role:alumni');

// Route::get('/invoice', function () {
//     return view('alumni/invoice');
// ;})
// ->middleware('role:alumni');

Route::get('/invoice/{id}', [InvoiceController::class, 'getDataInvoiceById']);
//Route::get('/invoice', [InvoiceController::class, 'invoice']);

Route::get('/status-ajuan2', function () {
    return view('alumni/status-ajuan2');
});
// ->middleware('role:alumni');

Route::get('/riwayat-invoice', function () {
    return view('alumni/riwayat-invoice');
});
// ->middleware('role:alumni');

Route::get('/kuesioner', [KuisionerAlumniController::class, 'pertanyaan']);

Route::get('/status-ajuan3', function () {
    return view('alumni/status-ajuan3');
});
// ->middleware('role:alumni');

Route::get('/flow', function () {
    return view('flow');
});

Route::get('/preview-pengajuan', [PreviewPengajuanController::class, 'data']);
// ->middleware('role:alumni');

// Route::get('/admin', function () {
//     // Aksi yang dilakukan hanya oleh pengguna dengan peran "admin"
// ;})
// ->middleware('role:admin');

Route::get('/admin', [DashboardAdminController::class, 'index']);
// ->middleware('role:admin_prodi');

Route::get('/administrator', [AdministratorController::class, 'index']);
// ->middleware('role:administrator');

Route::get('/user-admin', [AdministratorController::class, 'listAdmin']);
// ->middleware('role:administrator');

Route::get('/user-alumni', [AdministratorController::class, 'listAlumni']);
// ->middleware('role:administrator');

Route::delete('/user-admin/{id}', [AdministratorController::class, 'destroy']);
// ->name('user-admin.destroy');

Route::get('/daftar-ajuan-legalisir', function () {
    return view('admin/daftar-ajuan-legalisir');
});
// ->middleware('role:admin_prodi');

Route::get('/index', function () {
    return view('index');
});

Route::get('/legalisir-selesai', function () {
    return view('admin/legalisir-selesai');
});
// ->middleware('role:admin_prodi');

Route::get('/berkas-selesai', function () {
    return view('admin/berkas-selesai');
});
// ->middleware('role:admin_prodi');

Route::get('/legalisir-pending', function () {
    return view('admin/legalisir-pending');
});
// ->middleware('role:admin_prodi');

Route::get('/legalisir-gagal', function () {
    return view('admin/legalisir-gagal');
});
// ->middleware('role:admin_prodi');

Route::get('/berkas-tidak-valid', function () {
    return view('admin/berkas-tidak-valid');
});
// ->middleware('role:admin_prodi');

Route::get('/kuesioner-admin', function () {
    return view('admin/kuesioner');
});
// ->middleware('role:admin_prodi');

Route::get('/berkas-pending', function () {
    return view('admin/berkas-pending');
});
// ->middleware('role:admin_prodi');

Route::get('/edit-ajuan', function () {
    return view('admin/edit-ajuan');
});
// ->middleware('role:admin_prodi');

Route::get('/kuesioner-admin', [KuesionerAdminController::class, 'index'])->middleware('role:admin_prodi');

Route::get('/tambah-kuesioner', [KuesionerAdminController::class, 'create'])->middleware('role:admin_prodi');

Route::post('/tambah-kuesioner', [KuesionerAdminController::class, 'store'])->name('kuesioner.store')->middleware('role:admin_prodi');

// ->middleware('role:admin_prodi');

Route::get('/edit-kuesioner', function () {
    return view('admin/edit-kuesioner');
});
// ->middleware('role:admin_prodi');

Route::get('/validasi-berkas', function () {
    return view('admin/validasi-berkas');
});
// ->middleware('role:admin_prodi');

// Route::get('/administrator', function () {
//     return view('administrator/administrator');
// ;})
// ->middleware('role:administrator');

Route::get('/users', function () {
    return view('administrator/users');
});
// ->middleware('role:administrator');

// Route::get('/user-alumni', function () {
//     return view('administrator/user-alumni');
// ;})
// ->middleware('role:administrator');

Route::get('/daftar-berkas', function () {
    return view('admin/daftar-berkas');
});
// ->middleware('role:admin_prodi');

Route::get('/pertanyaan', function () {
    return view('admin/pertanyaan');
});
// ->middleware('role:admin_prodi');

Route::get('/pertanyaan-baru', function () {
    return view('admin/pertanyaan-baru');
});
// ->middleware('role:admin_prodi');

Route::get('respon', function () {
    return view('admin/respon');
});
// ->middleware('role:admin_prodi');

Route::get('/about', function () {
    return view('alumni/about');
});

Route::get('/profile-admin', function () {
    return view('admin/profile-admin');
});
// ->middleware('role:admin_prodi');

Route::get('/profile-administrator', function () {
    return view('administrator/profile-administrator');
});
// ->middleware('role:administrator');

Route::get('/login', function () {
    return view('auth.login');
});


Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/login', [LoginController::class, 'store'])->name('login');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Auth::routes();