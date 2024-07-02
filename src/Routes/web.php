<?php

use Illuminate\Support\Facades\Route;
use NexaMerchant\Monitor\Http\Controllers\Web\ExampleController;

Route::group(['middleware' => ['locale', 'theme', 'currency'], 'prefix'=>'monitor'], function () {

    Route::controller(ExampleController::class)->prefix('example')->group(function () {

        Route::get('demo', 'demo')->name('monitor.web.example.demo');

    });

});

include "admin.php";