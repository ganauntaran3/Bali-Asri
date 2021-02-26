<?php


use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;

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
    return view('welcome');
});

    Route::prefix('baliasri')->group(function () {
        route::get('/test', [HomeController::class, 'test']);
        route::get('/about', [AboutController::class, 'index']);
        route::get('/contact', [ContactController::class, 'index']);
        route::get('/home', [HomeController::class, 'index']);
    });
