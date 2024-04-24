<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\HomeController;

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

Route::prefix('category')->group(function () {
    Route::get('/', [HomeController::class, 'get_all_category']);
    // Route::get('/edit', [HomeController::class, 'get_all_category']);
    // Route::post('/edit', [HomeController::class, 'get_all_category']);
    // Route::get('/add', [HomeController::class, 'get_all_category']);
    // Route::post('/add', [HomeController::class, 'get_all_category']);
    // Route::get('/', [HomeController::class, 'get_all_category']);
    // Route::get('/', [HomeController::class, 'get_all_category']);


























});


// Route::get('/', function () {
//     return view('home');
// });
