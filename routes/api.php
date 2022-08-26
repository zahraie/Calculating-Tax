<?php

use App\Http\Controllers\Api\ApiCountryController;
use App\Http\Controllers\Api\ApiCountyController;
use App\Http\Controllers\Api\ApiStateController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


//country

Route::prefix('countries')->name('countries.')->controller(ApiCountryController::class)
    ->group(function () {

        Route::get('/', 'index')->name('index');
        Route::get('/averageTaxCountry', 'averageTaxCountry')->name('averageTaxCountry');
        Route::get('/overallTaxCountry', 'overallTaxCountry')->name('overallTaxCountry');
        Route::post('/', 'store')->name('store');
        Route::put('/{country}', 'update')->name('update');
        Route::delete('/{country}', 'destroy')->name('destroy');

    });

Route::prefix('states')->name('states.')->controller(ApiStateController::class)
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/overallTaxState', 'overallTaxState')->name('overallTaxState');
        Route::get('/averageTaxState', 'averageTaxState')->name('averageTaxState');
        Route::get('/averageCountyTaxRate', 'averageCountyTaxRate')->name('averageCountyTaxRate');
        Route::post('/', 'store')->name('store');
        Route::put('/{state}', 'update')->name('update');
        Route::delete('/{state}', 'destroy')->name('destroy');
    });

//state


Route::prefix('counties')->name('counties.')->controller(ApiCountyController::class)
    ->group(function () {
        //county
        Route::get('/', 'index');
        Route::post('/', 'store');
        Route::put('/{county}', 'update');
        Route::delete('/{county}', 'destroy');
    });



