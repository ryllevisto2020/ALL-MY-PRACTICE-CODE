<?php

use App\Http\Controllers\loginCtrl;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\signUpCtrl;
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
    return view('login');
});
Route::get('/signup', [signUpCtrl::class,'action_signUp'])->name('signUp');
Route::get('/login', [loginCtrl::class,'action_login'])->name('login');


Route::get('/test', [loginCtrl::class,'test']);