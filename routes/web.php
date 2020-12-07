<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

/*HOME ROUTE*/
Route::get('/', function() {
    return view('index');
});

/*SERVICES ROUTE*/
Route::get('/services', function() {
    return view('services');
});

/*ABOUT ROUTE*/
Route::get('/about', function() {
    return view('about');
});

/*CLIENTS ROUTE*/
Route::get('/clients', function() {
    return view('clients');
});

/*CONTACT ROUTE*/
Route::get('/contact', [ContactController::class, 'contact']);

/*CONTACT FORM ROUTE*/
Route::post('/send-message', [ContactController::class, 'sendEmail'])->name('contact.send');