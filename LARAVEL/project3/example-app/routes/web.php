<?php

use App\Http\Controllers\GatesController;
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
Route::get('/gateTest',[GatesController::class,'index'])->can('admin_only','user');
Route::get('/auth',[GatesController::class,'auth']);
Route::get('/out',[GatesController::class,'out']);
