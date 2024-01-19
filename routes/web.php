<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'home']);
Route::get('/events/create', [EventController::class, 'create'])->middleware('auth');
Route::get('/events/{id}', [EventController::class, 'show']);
Route::post('/events', [EventController::class, 'save'])->middleware('auth');
Route::delete('/events/{id}', [EventController::class, 'destroy']);

Route::get('/contact', function () {
    return view('contact');
});

Route::middleware([
    'auth:sanctum',
    'verified',
])->group(function () {
    Route::get('/dashboard',[EventController::class, 'index'])->name('dashboard');
});
