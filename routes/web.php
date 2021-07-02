<?php

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
    return view('homepage');
});

// Route::get('/dashboard', function () {
//     return view('admin.dashboard');
// });

// Route::get('/profile', function () {
//     return view('customer.profile');
// });

Auth::routes();
// Route::get('/profile', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::group(['middleware' => ['auth', 'checklevel:1']], function () {
//     route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
// });

// Route::group(['middleware' => ['auth', 'checklevel:1, 0']], function () {
    // route::get('/dashboard', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
//     route::get('/profile', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
// });

Route::group([
    'prefix' => 'user',
    'as' => 'user.',
    // 'namespace' => 'User',
    'middleware' => ['auth']
], function () {
    Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('home');
});

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
    // 'namespace' => 'Admin',
    'middleware' => ['auth', 'admin']
], function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('home');
    // Route::resource('/input', [App\Http\Controllers\Admin\TransaksiController::class, 'index'])->name('index');
});