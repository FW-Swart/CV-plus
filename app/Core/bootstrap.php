<?php

require 'vendor/autoload.php';

require 'app/Core/Core.php';

require 'app/Helpers/PageTitleHelper.php';

session_start();

$dotenv = \Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

// !!!!! SWART FlashMessages doen ut nog njet
$msg = new \Plasticbrain\FlashMessages\FlashMessages();

$msg->display();