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

Route::view('/', 'index', [
    'jobs' => json_decode(
        File::get(
            storage_path('portfolio/jobs.json')
        ),
        true
    )
])
    ->name('index');

Route::post('/contactRequest', [ContactRequestController::class, 'sendRequest'])
    ->name('contactRequest');
