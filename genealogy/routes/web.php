<?php

use App\Http\Controllers\PersonController;
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

Route::get('/', function () {
    return view('welcome');
});
route::get("/genealogy",function(){
    return view("base");
});
route::prefix('/genealogy')->name('people.')->group(function (){
    route::get('/people',[PersonController::class,'index'])->name('index');
    route::get('/people/new',[PersonController::class,'create'])->name('create');
    route::post('/people/new',[PersonController::class,'store'])->name('store');

});

