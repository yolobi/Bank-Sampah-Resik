<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


    //AUTH
    Route::get('/logout', [AuthController::class, 'logout'])->name('signout');
    Route::get('/login', [AuthController::class, 'login_index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('user-login');
    Route::get('/register', [AuthController::class, 'register_index']);
    Route::post('/register', [AuthController::class, 'register']);

    Route::get('/', [MainController::class, 'index']);
    Route::get('/about', [MainController::class, 'about']);
    Route::get('/contact', [MainController::class, 'contact']);

//USER
Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', [MainController::class, 'dashboard'])->name('dashboard');
    Route::prefix('/user')->group(function(){
        Route::get('/buku-tabungan', [UserController::class, 'buku_tabungan']);
        Route::get('/peringkat', [UserController::class, 'peringkat']);
        Route::get('/edit-profil', [UserController::class, 'edit_profil']);
        Route::post('/edit-profil', [UserController::class, 'postEditProfil'])->name('post-edit-profil');
        Route::get('/daftar-harga', [UserController::class, 'daftarHarga']);
        Route::get('/penarikan', [UserController::class, 'penarikan']);
        Route::get('/request-penarikan', [UserController::class, 'requestPenarikan'])->name('request-penarikan-user');
        Route::post('/request-penarikan', [UserController::class, 'postRequestPenarikan'])->name('post-add-request');
    });
    Route::prefix('/admin')->group(function(){
        Route::get('nasabah', [AdminController::class, 'getUsers']);
        Route::get('records', [AdminController::class, 'getRecords']);
        Route::get('tambah-record', [AdminController::class, 'addRecord'])->name('tambah-record');
        Route::post('tambah-record', [AdminController::class, 'postAddRecord'])->name('post-add-record');
        Route::get('request-penarikan', [AdminController::class, 'requestPenarikan']);
        Route::get('penarikan-setuju/{id}', [AdminController::class, 'penarikanSetuju'])->name('penarikan-setuju');
        Route::get('penarikan-tolak/{id}', [AdminController::class, 'penarikanTolak'])->name('penarikan-tolak');
    });
});
