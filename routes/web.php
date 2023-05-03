<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;

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

// Route::get('/', function () {
//     return view('frontend.index');
// });

// Route::get('/about', function () {
//     return view('frontend.about');
// });

// Route::get('/contact', function () {
//     return view('frontend.contact');
// });

// Route::get('/services', function () {
//     return view('frontend.services');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/contact', [HomeController::class, 'contact']);
Route::post('/contact', [HomeController::class, 'saveData']);

Route::get('/services', [HomeController::class, 'services']);