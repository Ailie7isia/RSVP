<?php

use App\Http\Controllers\confControl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeControl;

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

Route::get('/home', [homeControl::class,'home']);

Route::get('/details', [homeControl::class,'details']);

Route::get('/confirm', [confControl::class,'confirm']);

Route::post('/post-confirm', [confControl::class,'doConfirm']);

