<?php
session_start();
require_once '../config/config.php';
require_once APP_PATH . '/vendor/autoload.php';
require_once '../config/helper.php';
$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();
require_once  APP_PATH . '/routes/web.php';

app()->run();








