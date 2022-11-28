<?php

use App\Models\Book;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PublisherController;

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




