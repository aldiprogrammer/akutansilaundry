<?php

use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\LevelController;
use App\Http\Controllers\admin\LokasiController;
use App\Http\Controllers\admin\PaymentController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/lokasi', [LokasiController::class, 'index'])->name('lokasi');
Route::get('/tambahlokasi', [LokasiController::class, 'tambahlokasi'])->name('tambahlokasi');
Route::post('/tambahlokasi', [LokasiController::class, 'create'])->name('lokasi.create');
Route::delete('/hapuslokasi/{id}', [LokasiController::class, 'delete'])->name('lokasi.delete');
Route::get('/editlokasi/{id}', [LokasiController::class, 'edit'])->name('editlokasi');
Route::put('/editlokasi/{id}', [LokasiController::class, 'update'])->name('lokasi.update');

Route::get('/level', [LevelController::class, 'index'])->name('level');
Route::get('/tambahlevel', [LevelController::class, 'tambahlevel'])->name('tambahlevel');
Route::post('/tambahlevel', [LevelController::class, 'create'])->name('level.create');
Route::get('/editlevel/{id}', [LevelController::class, 'edit'])->name('editlevel');
Route::put('/editlevel/{id}', [LevelController::class, 'update'])->name('level.update');
Route::delete('/hapuslevel/{id}', [LevelController::class, 'hapus'])->name('level.update');

Route::get('/customer', [CustomerController::class, 'index'])->name('customer');
Route::get('/tambahcustomer', [CustomerController::class, 'tambahcustomer'])->name('tambahcustomer');
Route::post('/tambahcustomer', [CustomerController::class, 'create'])->name('customer.create');
Route::get('/editcustomer/{id}', [CustomerController::class, 'edit'])->name('editcustomer');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/tambahpayment', [PaymentController::class, 'tambahpayment'])->name('tambahpayment');
Route::post('/tambahpayment', [PaymentController::class, 'create'])->name('payment.create');
Route::get('/editpayment/{id}', [PaymentController::class, 'edit'])->name('editpayment');
Route::put('/editpayment/{id}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('hapuspayment/{id}', [PaymentController::class, 'delete'])->name('delete');
