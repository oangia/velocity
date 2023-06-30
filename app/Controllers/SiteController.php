<?php
namespace App\Controllers;

class SiteController {
    public function home() {
        return _view('welcome');
    }
}