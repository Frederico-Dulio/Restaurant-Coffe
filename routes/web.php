<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClientController;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;


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

/* ---------- Admin Rout ----------*/

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'Index'])->name('login');

    Route::post('/login/owner', [AdminController::class, 'Login'])->name('admin.login');

    Route::post('/register/create', [AdminController::class, 'AdminRegister'])->name('admin.register.create');

    Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    Route::get('/logout', [AdminController::class, 'Logout'])->name('admin.logout')->middleware('admin');
});

/* ---------- End Admin Rout ----------*/

/* ---------- Cliente Rout ----------*/

Route::prefix('client')->group(function () {
    Route::get('/login', [ClientController::class, 'Index'])->name('login');

    Route::post('/login/owner', [ClientController::class, 'Login'])->name('admin.login');

    Route::post('/register/create', [ClientController::class, 'AdminRegister'])->name('admin.register.create');

    Route::get('/dashboard', [ClientController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');

    Route::get('/logout', [ClientController::class, 'Logout'])->name('admin.logout')->middleware('admin');
});

/* ---------- End Client Rout ----------*/


Route::get('/', function () {

    return view('index');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');
// require __DIR__ . '/auth.php';
