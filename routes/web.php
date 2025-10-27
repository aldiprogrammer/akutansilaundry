<?php

use App\Http\Controllers\admin\CostController;
use App\Http\Controllers\admin\CustomerController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ExpensesController;
use App\Http\Controllers\admin\LevelController;
use App\Http\Controllers\admin\LokasiController;
use App\Http\Controllers\admin\PaymentController;
use App\Http\Controllers\admin\PengumumanController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\admin\ServiceTypeController;
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
Route::put('/editcustomer/{id}', [CustomerController::class, 'update'])->name('customer.update');
Route::delete('hapuscustomer/{id}', [CustomerController::class, 'delete'])->name('delete');


Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/tambahpayment', [PaymentController::class, 'tambahpayment'])->name('tambahpayment');
Route::post('/tambahpayment', [PaymentController::class, 'create'])->name('payment.create');
Route::get('/editpayment/{id}', [PaymentController::class, 'edit'])->name('editpayment');
Route::put('/editpayment/{id}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('hapuspayment/{id}', [PaymentController::class, 'delete'])->name('delete');

Route::get('/servicetype', [ServiceTypeController::class, 'index'])->name('servicetype');
Route::get('/tambahservicetype', [ServiceTypeController::class, 'tambahservicetype'])->name('tambahservicetype');
Route::post('/tambahservicetype', [ServiceTypeController::class, 'create'])->name('servicetype.create');
Route::get('/editservice/{id}', [ServiceTypeController::class, 'edit'])->name('editservicetype');
Route::put('/editservice/{id}', [ServiceTypeController::class, 'update'])->name('servicetype.update');
Route::delete('hapusservicetype/{id}', [ServiceTypeController::class, 'delete'])->name('delete');

Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/tambahpengumuman', [PengumumanController::class, 'tambahpengumuman'])->name('tambahpengumuman');
Route::post('/tambahpengumuman', [PengumumanController::class, 'create'])->name('pengumuman.create');
Route::get('/editpengumuman/{id}', [PengumumanController::class, 'edit'])->name('editpengumuman');
Route::put('/pengumuman/{id}', [PengumumanController::class, 'update'])->name('pengumuman.update');
Route::delete('/hapuspengumuman/{id}', [PengumumanController::class, 'delete'])->name('delete');

Route::get('/cost', [CostController::class, 'index'])->name('cost');
Route::get('/tambahcost', [CostController::class, 'tambahcost'])->name('tambahcost');
Route::post('/tambahcost', [CostController::class, 'create'])->name('cost.create');
Route::get('/editcost/{id}', [CostController::class, 'edit'])->name('editcost');
Route::put('/cost/{id}', [CostController::class, 'update'])->name('cost.update');
Route::delete('/hapuscost/{id}', [CostController::class, 'delete'])->name('delete');

Route::get('/expenses', [ExpensesController::class, 'index'])->name('expenses');
Route::get('/tambahexpenses', [ExpensesController::class, 'tambahexpenses'])->name('tambahexpenses');
Route::get('/detailcost/{id}', [ExpensesController::class, 'detailcost'])->name('detailcost');
Route::post('/tambahexpenses', [ExpensesController::class, 'create'])->name('expenses.create');
Route::get('/editexpenses/{id}', [ExpensesController::class, 'edit'])->name('editexpenses');
Route::put('/editexpenses/{id}', [ExpensesController::class, 'update'])->name('expenses.update');
Route::delete('/hapusexpenses/{id}', [ExpensesController::class, 'delete'])->name('delete');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/tambahservice', [ServiceController::class, 'tambahservice'])->name('tambahservice');
Route::post('/tambahservice', [ServiceController::class, 'create'])->name('service.create');
Route::get('/editservice/{id}', [ServiceController::class, 'edit'])->name('editservice');
Route::put('/editservice/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::delete('/hapusservice/{id}', [ServiceController::class, 'delete'])->name('delete');
