<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewUsersController;


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


Route::post("/api/newUsers", [NewUsersController::class, 'create']);
Route::get("/api/newUsers/getusers", [NewUsersController::class, 'getUser']);
URL::forceScheme('https');