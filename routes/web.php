<?php

use Illuminate\Support\Facades\Route;


// Admin
use App\Http\Controllers\Admin\AdminController;


// Frontend
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



// Frontend Route
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Admin Routes
Route::get('admin/dashbord', [AdminController::class, 'dashBord'])->name('admin.dashbord');
