<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/countries', function () {
    // Get the datas from the endpoint
    $response = Http::get('https://restcountries.eu/rest/v2/regionalbloc/eu');

    if ($response->successful()) {
        // Return the fetched datas
        return response([
            'status' => $response->status(),
            'message' => '',
            'datas' => $response->json(),
        ], $response->status())->header('Content-Type', 'application/json');
    }
    else {
        // Return error message
        return response([
            'status' => $response->status(),
            'message' => 'Can\'t fetch datas. Skipping...',
            'datas' => '',
        ], $response->status())->header('Content-Type', 'application/json');
    }
})->name('get-countries');
