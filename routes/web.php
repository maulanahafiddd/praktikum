<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hallocontroller;
use App\Http\Controllers\page2;

use App\Http\Controllers\maulanaController;


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
Route::get('/hello', [hallocontroller::class, 'index']);
Route::get('/hello2', [page2::class, 'ikilo'])->name('cobahalo');

Route::get('/home', [maulanaController::class, 'home']);
Route::get('/artikel', [maulanaController::class, 'artikel']);
Route::get('/contact_us', [maulanaController::class, 'contactus']);