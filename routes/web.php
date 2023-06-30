<?php
use oangia\Route;

Route::get('/', function () {
    return _view('welcome');
});