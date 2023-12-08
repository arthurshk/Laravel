<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RuleController;
use App\Http\Controllers\SettingController;

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
    return view('welcome');
});

// Route::get(/'login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/order', [OrderController::class, 'index'])->name('order');
Route::get('/order/create', [OrderController::class, 'create'])->name('order.create');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/order/{id}', [OrderController::class, 'show'])->name('order.show');
Route::get('/order/{id}/edit', [OrderController::class, 'edit'])->name('order.edit');
Route::put('/order/{id}', [OrderController::class, 'update'])->name('order.update');
Route::delete('/order/{id}', [OrderController::class, 'destroy'])->name('order.destroy');
Route::post('/order/search', [OrderController::class, 'search'])->name('order.search');

Route::get('/client', [ClientController::class, 'index'])->name('client');
Route::get('/client/create', [ClientController::class, 'create'])->name('client.create');
Route::post('/client', [ClientController::class, 'store'])->name('client.store');
Route::get('/client/{id}', [ClientController::class, 'show'])->name('client.show');
Route::get('/client/{id}/edit', [ClientController::class, 'edit'])->name('client.edit');
Route::put('/client/{id}', [ClientController::class, 'update'])->name('client.update');
Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

Route::get('/role', [RoleController::class, 'index'])->name('role');
Route::get('/role/create', [RoleController::class, 'create'])->name('role.create');
Route::post('/role', [RoleController::class, 'store'])->name('role.store');
Route::get('/role/{id}', [RoleController::class, 'show'])->name('role.show');
Route::get('/role/{id}/edit', [RoleController::class, 'edit'])->name('role.edit');
Route::put('/role/{id}', [RoleController::class, 'update'])->name('role.update');
Route::delete('/role/{id}', [RoleController::class, 'destroy'])->name('role.destroy');

Route::get('/status', [StatusController::class, 'index'])->name('status');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
Route::post('/status', [StatusController::class, 'store'])->name('status.store');
Route::get('/status/{id}', [StatusController::class, 'show'])->name('status.show');
Route::get('/status/{id}/edit', [StatusController::class, 'edit'])->name('status.edit');
Route::put('/status/{id}', [StatusController::class, 'update'])->name('status.update');
Route::delete('/status/{id}', [StatusController::class, 'destroy'])->name('status.destroy');

Route::get('/payment', [PaymentController::class, 'index'])->name('payment');
Route::get('/payment/create', [PaymentController::class, 'create'])->name('payment.create');
Route::post('/payment', [PaymentController::class, 'store'])->name('payment.store');
Route::get('/payment/{id}', [PaymentController::class, 'show'])->name('payment.show');
Route::get('/payment/{id}/edit', [PaymentController::class, 'edit'])->name('payment.edit');
Route::put('/payment/{id}', [PaymentController::class, 'update'])->name('payment.update');
Route::delete('/payment/{id}', [PaymentController::class, 'destroy'])->name('payment.destroy');

Route::get('/country', [CountryController::class, 'index'])->name('country');
Route::get('/country/create', [CountryController::class, 'create'])->name('country.create');
Route::post('/country', [CountryController::class, 'store'])->name('country.store');
Route::get('/country/{id}', [CountryController::class, 'show'])->name('country.show');
Route::get('/country/{id}/edit', [CountryController::class, 'edit'])->name('country.edit');
Route::put('/country/{id}', [CountryController::class, 'update'])->name('country.update');
Route::delete('/country/{id}', [CountryController::class, 'destroy'])->name('country.destroy');

Route::get('/department', [DepartmentController::class, 'index'])->name('department');
Route::get('/department/create', [DepartmentController::class, 'create'])->name('department.create');
Route::post('/department', [DepartmentController::class, 'store'])->name('department.store');
Route::get('/department/{id}', [DepartmentController::class, 'show'])->name('department.show');
Route::get('/department/{id}/edit', [DepartmentController::class, 'edit'])->name('department.edit');
Route::put('/department/{id}', [DepartmentController::class, 'update'])->name('department.update');
Route::delete('/department/{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');

Route::get('/rule', [RuleController::class, 'index'])->name('rule');
Route::get('/rule/create', [RuleController::class, 'create'])->name('rule.create');
Route::post('/rule', [RuleController::class, 'store'])->name('rule.store');
Route::get('/rule/{id}', [RuleController::class, 'show'])->name('rule.show');
Route::get('/rule/{id}/edit', [RuleController::class, 'edit'])->name('rule.edit');
Route::put('/rule/{id}', [RuleController::class, 'update'])->name('rule.update');
Route::delete('/rule/{id}', [RuleController::class, 'destroy'])->name('rule.destroy');

Route::get('/setting', [SettingController::class, 'index'])->name('setting');
Route::get('/setting/create', [SettingController::class, 'create'])->name('setting.create');
Route::post('/setting', [SettingController::class, 'store'])->name('setting.store');
Route::get('/setting/{id}', [SettingController::class, 'show'])->name('setting.show');
Route::get('/setting/{id}/edit', [SettingController::class, 'edit'])->name('setting.edit');
Route::put('/setting/{id}', [SettingController::class, 'update'])->name('setting.update');
Route::delete('/setting/{id}', [SettingController::class, 'destroy'])->name('setting.destroy');