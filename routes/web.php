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
    return view('frontend.home');
});

Route::get('/welcome', function () {
    return view('welcome');
});


// Authentication Route
Auth::routes();



// Admin Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('admin/dashbord', [AdminController::class, 'adminDashbord'])->name('admin.dashbord');
