<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web"  middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
Route::get('/details', function () {
    return view('frontend.pages.details');
})->name('frontend.details');
Route::get('/submit-project', function () {
    return view('frontend.pages.submit');
})->name('frontend.submit-project');
Route::resource('project',\App\Http\Controllers\ProjectController::class);
