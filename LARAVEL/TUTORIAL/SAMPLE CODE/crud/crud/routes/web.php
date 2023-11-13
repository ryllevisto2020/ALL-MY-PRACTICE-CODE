<?php

use App\Http\Controllers\account;
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

Route::get('/register', function () {
    return view('register');
});


Route::controller(account::class)->group(function (){
    Route::get('/account/register','register');
    Route::get('/account/register/submit','submit')->middleware(['submit_auth']);
});

