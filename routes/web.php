<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::post('/auth', [UserController::class, 'auth'])->name("auth.user");

//view
Route::get('/', [UserController::class, 'index']);

Route::get('/contact', [ContactController::class, 'newContactView']);
Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contact/{id}', [ContactController::class, 'updateView']);
Route::get('/contact/detail/{id}', [ContactController::class, 'showView']);

//actions
Route::post('/contact', [ContactController::class, 'store'])->name("contact.store");
Route::patch('/contact', [ContactController::class, 'update'])->name("contact.update");
Route::delete('/contact/{id}', [ContactController::class, 'delete'])->name('contact.destroy');
