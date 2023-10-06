<?php

use App\Http\Controllers\loginAndSigninController;
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
    return view('loginAndsignin');
});
Route::post('/insert',[loginAndSigninController::class, 'signIn'])->name('insertRoute');
Route::get('/middle',[loginAndSigninController::class,'middle'])->middleware(['ageRestrict']);
Route::get('/safe',[loginAndSigninController::class,'safe'])
->name('safered');
Route::get('/gates',[loginAndSigninController::class,'gate'])
->name('gated');
