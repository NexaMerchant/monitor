<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Monitor\Http\Controllers\Admin\ExampleController;

Route::group(['middleware' => ['admin','admin_option_log'], 'prefix' => config('app.admin_url')], function () {
    Route::prefix('monitor')->group(function () {

        Route::controller(ExampleController::class)->prefix('example')->group(function () {

            Route::get('demo', 'demo')->name('monitor.admin.example.demo');

        });

    });
});