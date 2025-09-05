<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;

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


Route::get('/notauth' , function(){
    return view('notauth.index');
})->name('notauth');

Route::get('/user' , function(){
    return view('user.index');
})->middleware('auth', 'role:user')->name('user');


Route::get('/admin', [AdminController::class, 'users'])
    ->middleware(['auth', 'role:admin'])
    ->name('admin');

Route::get('/admin/index', [AdminController::class,'users'])->middleware('auth', 'role:admin')->name
('admin.index');
Route::get('/admin/view/{id}', [AdminController::class, 'view'])-> middleware('auth','role:admin')->name
('admin.view');
Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])-> middleware('auth','role:admin')->name
('admin.edit');
Route::delete('/admin/delete/{id}', [AdminController::class, 'destroy'])->name('admin.delete');
Route::put('/admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');


Route::get('/user', [ProductController::class, 'index'])->middleware('auth', 'role:user')->name
('user.index');
Route::get('/user/create', [ProductController::class, 'create'])->middleware('auth', 'role:user')->name
('user.create');
Route::post('/user/store', [ProductController::class, 'store'])->middleware('auth', 'role:user')->name
('user.store');
Route::get('/user/view/{id}', [ProductController::class, 'show'])->middleware('auth', 'role:user')->name 
('user.view');
Route::get('/user/edit/{id}', [ProductController::class, 'edit'])->middleware('auth', 'role:user')->name
('user.edit');
Route::put('/user/update/{id}', [ProductController::class, 'update'])->middleware('auth', 'role:user')->name
('user.update');
Route::delete('/user/delete/{product}', [ProductController::class, 'destroy'])->name('user.delete');



require __DIR__.'/auth.php';
