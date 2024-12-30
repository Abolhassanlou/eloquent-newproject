// bootstrap.php
<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$capsule = new Capsule;

// Set up database connection
$capsule->addConnection([
    'driver' => 'mysql',
    'host' => 'localhost',
    'database' => 'mamafood',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8mb4',
]);

// Set the global Eloquent instance
$capsule->setAsGlobal();

// Boot Eloquent
$capsule->bootEloquent();
