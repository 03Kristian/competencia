<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\RoleController;

use function Psy\debug;

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
    return view('dashboard');
});

Route::get('/registro',[\App\Http\Controllers\LoginController::class,'registro'])->name('registro');

Route::get('/login',[\App\Http\Controllers\LoginController::class,'login'])->name('login');

Route::resource('roles',RoleController::class)->middkeware('role:');