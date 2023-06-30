<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'nguyen');
define('MONGO_URI', 'mongodb+srv://hqnhatdn:Abcd1234$$@cluster0.wnkrqan.mongodb.net/?retryWrites=true&w=majority');
define('VIEW_FOLDER', __DIR__ . '/../views');
define('HOST', str_replace('.', '_', $_SERVER['HTTP_HOST']));
session_start();
include __DIR__ . '/../vendor/oangia/webv2/sus.php';
require(__DIR__ . '/../vendor/autoload.php');

debug_setting();

use oangia\Request;

if (Request::isXhr()) {
    require(__DIR__ . '/../routes/api.php');
} else {
    require(__DIR__ . '/../routes/web.php');
}

