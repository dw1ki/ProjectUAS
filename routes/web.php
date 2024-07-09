<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\landingController;
use App\Http\Controllers\lokasiController;
use App\Http\Controllers\layananController;
use App\Http\Controllers\authController;
use App\Http\Controllers\tentangController;
use App\Http\Controllers\adminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => 'user-access:admin'], function () {
       
        route::get('/cms', [adminController::class, 'index']);
        route::get('/cms/data_kendaraan', [adminController::class, 'data_kendaraan']);
        route::get('/cms/data_kendaraan/show/{id}', [adminController::class, 'show'])->name('data_kendaraan.show');
        route::get('/cms/data_kendaraan/ubah/{id}', [adminController::class, 'edit']);
        route::patch('/cms/data_kendaraan/update/{id}', [adminController::class, 'update']);
        route::get('/cms/daftar_kendaraan', [adminController::class, 'daftar_kendaraan']);
        route::post('cms/data_kendaraan/create', [adminController::class, 'store']);
        route::get('/cms/transaksi', [adminController::class, 'transaksi_view']);
        route::get('/cms/transaksi/create', [adminController::class, 'transaksi_create']);
        route::post('/cms/transaksi/store', [adminController::class, 'transaksi_store']);
        
    });

    Route::group(['middleware' => 'user-access:user'], function () {
       
        
        route::get('cms/pengguna', [adminController::class, 'user_access']);
        
    });

});

route::post('/register', [authController::class, 'store']);
route::get('/login', [authController::class, 'index'])->name('login');;
route::post('/login/process', [authController::class, 'authenticate']);
route::get('/', [landingController::class, 'index']);
route::get('lokasi', [landingController::class, 'lokasi']);
route::get('layanan', [landingController::class, 'layanan']);
route::get('registrasi', [landingController::class, 'registrasi']);
route::get('tentang', [landingController::class, 'tentang']);

Route::group(['middleware' => 'auth:role'], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
});