<?php
namespace App\Models;

use oangia\MongoDB\Model;

class User extends Model {
    public static $fields = ['email', 'password', 'name'];
    public static $database = HOST;
    public static $collection = 'users';
}