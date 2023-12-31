<?php

use App\Http\Controllers\ContactRequestController;
use Illuminate\Support\Facades\Route;

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

Route::view('/', 'jobs')
    ->name('jobs');

Route::view('/info', 'info')
    ->name('info');

Route::view('/contact', 'contact')
    ->name('contact');

Route::post('/contactRequest', [ContactRequestController::class, 'sendRequest'])
    ->name('contactRequest');
