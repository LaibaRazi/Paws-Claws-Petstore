<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pet;
use App\Http\Controllers\pet_supply;
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
    return view('index');
});
Route::view('/about', 'about');
Route::view('/instore','instore');
Route::view('/cart','cart');
Route::get('/insert',[pet::class,'pet'])->name('pet.view');
Route::post('/insert',[pet::class,'store']);
Route::get('/insert/display',[pet::class,'displaypet']);
Route::get('/supply',[pet_supply::class,'supply'])->name('supply.view');
Route::post('/supply',[pet_supply::class,'stores']);
//Edit and Delete
Route::get('/insert/delete/{id}',[pet::class,'delete'])->name('insert.delete');
Route::view('/contact','contact');

