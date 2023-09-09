<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\MycarController;
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

Route::get('/home', function () {
    return view('welcome');
});

/*login routes*/
Route::get('/login/login', [loginController::class, 'login']);
Route::get('/login/signup', [loginController::class, 'signup']);
Route::get('/login/check_login', [loginController::class, 'check_login']);
Route::get('/signup/Account', [loginController::class, 'store']);
Route::get('/account/update', [loginController::class, 'update']);
Route::get('/user/home', [loginController::class, 'home']);
/*end of login routes*/

//cars upload routes//
Route::get('/user/mycars/{id}', [MycarController::class, 'index']);
Route::get('/user/saveCar', [MycarController::class, 'store']);

//cars posts routes//
Route::get('/user/home', [HomeController::class, 'home']);


