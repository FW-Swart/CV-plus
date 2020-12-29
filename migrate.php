<?php

require 'vendor/autoload.php';

// require $_SERVER['DOCUMENT_ROOT'] . '/' . 'Core/bootstrap.php';

use app\Database\MigrateDatabase;

$dotenv = \Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

MigrateDatabase::migrate(array_search('-f', $argv) !== false, array_search('-s', $argv) !== false);