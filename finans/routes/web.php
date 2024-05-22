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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

use App\Http\Controllers\front\home\indexController;

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

require __DIR__.'/auth.php';

Route::namespace('front')->group(function () {
    Route::namespace('home')->prefix('')->name('home.')->group(function () {
        Route::get('/', [indexController::class, 'index'])->name('index');
    });
});



Route::prefix('musteriler')->name('musteriler.')->group(function () {
    Route::get('/', [App\Http\Controllers\front\musteriler\indexController::class, 'index'])->name('index');
    Route::get('/olustur', [App\Http\Controllers\front\musteriler\indexController::class, 'create'])->name('create');
    Route::post('/olustur', [App\Http\Controllers\front\musteriler\indexController::class, 'store'])->name('store');
    Route::get('/duzenle/{id}', [App\Http\Controllers\front\musteriler\indexController::class, 'edit'])->name('edit');
    Route::post('/duzenle/{id}', [App\Http\Controllers\front\musteriler\indexController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [App\Http\Controllers\front\musteriler\indexController::class, 'delete'])->name('delete');
    Route::get('/', [\App\Http\Controllers\Front\Musteriler\indexController::class, 'index'])->name('index');
    Route::post('/data', [\App\Http\Controllers\Front\Musteriler\indexController::class, 'data'])->name('data');
});
