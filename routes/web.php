<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\LotController;
use App\Http\Controllers\MessageController;
use Illuminate\Contracts\Session\Middleware\AuthenticatesSessions;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\Mime\MessageConverter;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware('guest')->group(function () {
    Route::get('register',[RegisterController::class, 'create'])->name('register');
    Route::post('register',[RegisterController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);
});

Route::get('/', [LotController::class, 'index'])->name('main');
Route::get('/search', [LotController::class, 'search'])->name('search');

Route::middleware('auth')->group(function () {
    Route::get('logout', [LoginController::class, 'destroy'])->name('logout');
    Route::get('lots', [LotController::class, 'index'])->name('lotsIndex');
    Route::post('lots', [LotController::class, 'changePrice']);    
    Route::get('lotswin', [LotController::class, 'lotsWin'])->name('winlots');     
    Route::get('current', [LotController::class, 'current'])->name('current');     
    Route::get('mylots', [LotController::class, 'myLots'])->name('mylots');

    
    Route::get('add', [LotController::class, 'addLotForm'])->name('add');
    Route::post('add', [LotController::class, 'addLotStore']);

    Route::get('users', [MessageController::class, 'usersList']);
    Route::get('message/{id}', [MessageController::class, 'create'])->name('message');
    Route::post('message', [MessageController::class, 'store']);
    Route::get('inbox', [MessageController::class, 'inbox']);
});

Route::middleware('auth','isadmin')->group(function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/{lot}/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/{lot}', [AdminController::class, 'update'])->name('admin.update');

    Route::get('/usersList', [AdminController::class, 'users'])->name('users');
    Route::get('/block/{id}', [AdminController::class, 'block'])->name('block');

    Route::delete('/delete/{lot}', [AdminController::class, 'destroy'])->name('admin.delete');
});