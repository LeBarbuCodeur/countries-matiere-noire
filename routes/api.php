<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Countries;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Get countries list from the front
Route::get('/countries', [Countries::class, 'get'])->name('get-countries');

// Fetch the countries from the endpoint. Callable through a cronjob.
Route::get('/fetch-countries', [Countries::class, 'fetch'])->name('fetch-countries');
