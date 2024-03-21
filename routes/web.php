<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\PhotoController;

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

Route::get('/welcome',[WelcomeController::class,'index']);

Route::get('/page1', function () {
    return view('page1');
});
Route::get('/', function () {
    return view('demo');
});

Route::get('/ex1', function () {
    return view('ex1');
})->middleware('Demo');

Route::get('/demo1', [WelcomeController::class,'singup']);
Route::post('/process', [WelcomeController::class,'process_singup'])->name('demo1');

Route::resource('/product', PhotoController::class);


// Route::resource('/product', PhotoController::class);