<?php

// $config = require 'config.php';

require 'app/Helpers/PageTitleHelper.php';

require 'vendor/autoload.php';

session_start();

$dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

require 'app/Core/Core.php';

// !!!! Deze geeft nog een fout !!!!
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

$msg->display();