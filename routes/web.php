<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Livewire\Dashboard;
use App\Livewire\Admin\Login;
use App\Livewire\Products;
use App\Livewire\VendorDashboard;
use App\Livewire\VendorProducts;


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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('seller')->name('vendor.')->prefix('vendor')->group(function () {
    Route::view('dashboard', 'vendor-dashboard')->name('dashboard');
    Route::view('products', 'vendor-products')->name('products');
});

//route to admin.blade.php file
Route::get('/admin/dashboard/', function () {
    return view('admin/admin');
})->middleware(['admin'])->name('admin');


//route to admin login.blade.php file under admin folder
Route::get('/admin/login', function () {
    return view('admin/login');
})->middleware(['admin'])->name('admin.login');


require __DIR__ . '/auth.php';
