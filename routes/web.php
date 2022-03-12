<?php

use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['middleware' => ['role:user']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::group(['middleware' => ['role:super admin|admin kursus|admin finance|manager']], function () {
    Route::get('admin/dashboard', DashboardController::class)->name('admin.dashboard');
    Route::get('admin/course', [CourseController::class, 'index'])->name('admin.course')->can('show course');
    Route::get('admin/order', [OrderController::class, 'index'])->name('admin.order')->can('show order');
});
