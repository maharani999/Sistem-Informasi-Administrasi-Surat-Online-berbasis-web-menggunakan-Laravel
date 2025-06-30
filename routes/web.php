<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\SyaratController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengajuan;
use Illuminate\Support\Facades\Route;

Route::get('/registrasi', [AuthController::class, 'tampilRegistrasi'])->name('registrasi');
Route::post('/registrasi', [AuthController::class, 'submitRegistrasi'])->name('registrasi.submit');

Route::get('/login', [AuthController::class, 'tampilLogin'])->name('login');
Route::post('/login', [AuthController::class, 'submitLogin'])->name('login.submit');

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/about', function () {
    return view('about'); 
});  

Route::get('/surat', function () {
    return view('surat'); 
});

Route::get('/syarat/miskin', [SyaratController::class, 'miskin'])->name('syarat.miskin');   
Route::get('/syarat/domisili', [SyaratController::class, 'domisili'])->name('syarat.domisili');
Route::get('/syarat/kematian', [SyaratController::class, 'kematian'])->name('syarat.kematian');
Route::get('/syarat/skck', [SyaratController::class, 'skck'])->name('syarat.skck');
Route::get('/syarat/usaha', [SyaratController::class, 'usaha'])->name('syarat.usaha');


Route::middleware('auth')->group(function () {
    Route::get('/pengajuan/create', [PengajuanController::class, 'create'])->name('pengajuan.create');
    Route::post('/pengajuan/store', [PengajuanController::class, 'store'])->name('pengajuan.store');
    
    // Halaman success yang berisi daftar pengajuan user
    Route::get('/pengajuan', [PengajuanController::class, 'success'])->name('pengajuan.success');

    Route::get('/pengajuan/{id}/edit', [PengajuanController::class, 'edit'])->name('pengajuan.edit');
    Route::put('/pengajuan/{id}', [PengajuanController::class, 'update'])->name('pengajuan.update');
    Route::delete('/pengajuan/{id}', [PengajuanController::class, 'destroy'])->name('pengajuan.destroy');

    Route::get('/profil', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profil/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profil/update', [ProfileController::class, 'update'])->name('profile.update');

});

//Route::get('/success/{id}', [PengajuanController::class, 'success'])->name('pengajuan.success');
//Route::get('/success', function () {
//    $pengajuans = Pengajuan::orderBy('created_at', 'desc')->get();
//    return view('pengajuan.success', compact('pengajuans'));
//})->name('pengajuan.success');

Route::get('/contak', function () {
    return view('contak'); 
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/struktur', function () {
    return view('struktur'); 
});

