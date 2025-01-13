<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\RelationshipController;
use Illuminate\Support\Facades\Route;

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

Route::get('/login',[AuthController::class,'login'])->name('auth.login');
Route::delete('/logout',[AuthController::class,'logout'])->name('auth.logout');
Route::post('/login',[AuthController::class,'doLogin']);


Route::prefix('/genealogy')->group(function () {
    // Routes pour les personnes
    Route::prefix('/people')->name('people.')->group(function () {
        Route::get('/', [PersonController::class, 'index'])->name('index'); // people.index
        Route::get('/new', [PersonController::class, 'create'])->name('create')->middleware('auth'); // people.create
        Route::post('/new', [PersonController::class, 'store'])->name('store')->middleware('auth'); // people.store
    });

    // Routes pour les relations
    Route::prefix('/relationship')->name('relationship.')->group(function () {
        Route::get('/', [RelationshipController::class, 'index'])->name('index'); // relationship.index
        Route::get('/new', [RelationshipController::class, 'create'])->name('create')->middleware('auth'); // relationship.create
        Route::post('/new', [RelationshipController::class, 'store'])->name('store')->middleware('auth'); // relationship.store
    });
});


