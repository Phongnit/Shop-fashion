<?php

use App\Http\Controllers\LoginController;
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
Route::controller(LoginController::class)->group(function (){
    Route::get('/login','login');
    Route::post('/login','post-login');
    Route::get('/register','register');
    Route::post('/register','post-register');
    Route::get('/forgot','forgot');
    Route::post('/forgot','post-forgot');
});


Route::get('/', function () {
    return view('UI/index');
});
