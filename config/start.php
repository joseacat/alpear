<?php

require "vendor/autoload.php";

// Errores
//error_reporting(E_ALL);
//ini_set('display_errors', '1');

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

$capsule->addConnection([
    "driver" => "mysql",
    "host" => "127.0.0.1",
    "database" => "alpear",
    "username" => "root",
    "password" => "Alpera18"
]);
//Make this Capsule instance available globally.
$capsule->setAsGlobal();
// Setup the Eloquent ORM.
$capsule->bootEloquent();