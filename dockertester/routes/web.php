<?php


use App\Http\Controllers\BookController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LandingController;
use Illuminate\Support\Facades\Route;

 Route::get('/', function () {
    return view('welcome');
});
##Route::get('/', [HomeController::class, 'landingpage']);
Route::get('/landing', [LandingController::class, 'index']);
Route::get('/about', [HomeController::class, 'about']);
Route::get('/marketplace', [HomeController::class, 'marketplace']);
Route::get('/features', [HomeController::class, 'features']);
Route::get('/lib', [HomeController::class, 'lib']);
Route::post('/lib', [BookController::class, 'store']);

Route::get('/books', [BookController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    Route::get('/books/create', [BookController::class, 'create']);
    Route::post('/books', [BookController::class, 'store']);
    Route::get('/books/{id}/edit', [BookController::class, 'edit']);
    Route::put('/books/{id}', [BookController::class, 'update']);
    Route::delete('/books/{id}', [BookController::class, 'destroy']);
});

Route::get('/admin', [BookController::class, 'admin']);
Route::get('/admin/create', [BookController::class, 'createUser']);
Route::post('/admin/store', [BookController::class, 'storeUser']);
Route::get('/admin/edit/{id}', [BookController::class, 'editUser']);
Route::put('/admin/update/{id}', [BookController::class, 'updateUser']);
Route::delete('/admin/delete/{id}', [BookController::class, 'deleteUser']);

Route::get('/profile', [BookController::class, 'profile']);

Route::get('/uts', [BookController::class, 'uts']);


Auth::routes();

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/home', [LandingController::class, 'index']);
