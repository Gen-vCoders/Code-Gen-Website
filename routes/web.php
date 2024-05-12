<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\SubmissionForm;

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

// web.php
Route::get('/{any}', function () {
    return view('welcome');
})->where('any', '.*');

// Route::get('/login-admin', function () {
//     return view('login_dashboard');
// });


Route::post('/submit-form', [ContactFormController::class, 'submitForm']);
Route::post('/login-admin', [ContactFormController::class, 'loginForm']);
