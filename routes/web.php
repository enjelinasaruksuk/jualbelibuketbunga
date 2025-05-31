<?php

use App\Http\Controllers\ListBarangController;
use Illuminate\Support\Facades\Route;
use illuminate\http\Request;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DataBarangController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\UserProfileController;


Route::get('/signup', [SignupController::class, 'showSignup']);
Route::post('/signup', [SignupController::class, 'register']);


Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/', [WelcomeController::class, 'index']);
Route::get('/Welcome', [WelcomeController::class, 'index']);

Route::get('/contact', [WelcomeController::class, 'contact']);


Route::get('/dashboard', [DashboardController::class, 'index']);
Route::get('/item', [ItemController::class, 'index']);

Route::get('/DataBarang', [DataBarangController::class, 'tampilkan']);

Route::get('/user/{id}', function ($id) {
    return 'user dengan ID ' . $id;
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });
});



//Route::get('/ListBarang/{id}/{nama}', function ($id, $nama) {
//    return view('list_barang', compact('id', 'nama'));
//});

Route::get('/ListBarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);


Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori.index');

Route::get('/list_product', [ProductController::class, 'show']);

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/profile', [UserProfileController::class, 'show'])->name('user.profile');
Route::post('/profile', [UserProfileController::class, 'update'])->name('user.profile.update');

Route::get('/editprofil', [UserProfileController::class, 'edit']);