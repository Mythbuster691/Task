<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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



Route::middleware('auth')->group(function(){
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('/categories', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/view',[CategoryController::class, 'show']);
    Route::get('/edit/{id}',[CategoryController::class, 'edit'])->name('category.edit');
    Route::post('/update/{id}',[CategoryController::class, 'update'])->name('category.update');
    Route::post('/status/{id}',[CategoryController::class, 'status'])->name('category.status');
    Route::any('/delete/{id}',[CategoryController::class,'destroy'])->name('category.destroy');
});
