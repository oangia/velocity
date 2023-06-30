<?php
use oangia\Route;
use App\Controllers\Api\ApiController;

Route::group(['namespace' => '/api/v1'], function () {
    Route::get('/welcome',              [ApiController::class, 'welcome']);
});