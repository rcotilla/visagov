<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;

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
Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::view('/', 'home')->name('home');
    Route::get('/libros', [BookController::class, 'index'])->name('books');
    Route::view('/contacto', 'contact')->name('contact');
});

Route::post('store-book', [BookController::class, 'store']);
Route::get('get-book/{id}', [BookController::class, 'getBook']);
Route::post('update-book', [BookController::class, 'update']);
Route::post('delete-book', [BookController::class, 'delete']);

Route::post('submit', [ContactController::class, 'submit']);