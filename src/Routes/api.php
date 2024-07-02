<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Monitor\Http\Controllers\Api\ExampleController;

Route::group(['middleware' => ['api'], 'prefix' => 'api'], function () {
     Route::prefix('monitor')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('monitor.api.example.demo');

        });

     });
});