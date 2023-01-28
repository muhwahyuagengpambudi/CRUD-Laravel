<?php

use App\Models\Book;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBookController;

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::group(["prefix" => "/book"], function(){
    Route::get('/all', [BookController::class, 'index']); //view
    Route::get('/detail/{book}', [BookController::class, 'show']); //detail
    Route::get('/create', [BookController::class, 'create']); //create data
    Route::post('/add', [BookController::class, 'store']); //add data
    Route::delete('/delete/{book}', [BookController::class, 'destroy']); //delete data
    Route::get('/edit/{book}', [BookController::class, 'edit']);
    Route::post('/update/{book}', [BookController::class, 'update']);
});

Route::group(["prefix" => "/publisher"], function(){
    Route::get('/all', [PublisherController::class, 'index']); //view
    Route::get('/detail/{publishers}', [PublisherController::class, 'show']); //detail
});

Route::get('/index', [LoginController::class, 'index']);
Route::post('/index', [LoginController::class, 'auth'])->name('auth.action');

// Route::get('/index', [RegisterController::class, 'index']);

Route::post('/create', [RegisterController::class,'create']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/dashboard', function (){
    return view('dashboard.index');
});

Route::group(["prefix" => "/dashboard"], function () {
    Route::get('/', function () {
        return view('dashboard.index');
})->middleware('auth');

Route::group(["prefix" => "/book"], function(){
    Route::get('/all', [DashboardBookController::class, 'index'])->middleware('auth');
    Route::get('/detail/{book}', [DashboardBookController::class, 'show'])->middleware('auth');
    Route::get('/create', [DashboardBookController::class, 'create'])->middleware('auth');
    Route::post('/add', [DashboardBookController::class, 'store'])->middleware('auth');
    Route::delete('/delete/{book}', [DashboardBookController::class, 'destroy'])->middleware('auth'); 
    Route::get('/edit/{book}', [DashboardBookController::class, 'edit'])->middleware('auth');
    Route::post('/update/{book}', [DashboardBookController::class, 'update'])->middleware('auth');
    });
});