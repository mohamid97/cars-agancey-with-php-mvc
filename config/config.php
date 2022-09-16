<?php
const DS = DIRECTORY_SEPARATOR;
// return the app path
define('APP_PATH' , realpath(dirname(__FILE__)) .DS.'../' );
define('HOST' , $_SERVER['HTTP_HOST']);
// return the View path
const VIEW_PATH = APP_PATH .'views';
const PUBLIC_PATH = APP_PATH . 'public';
const  CSS_ADMIN_FILE = 'asset'.DS.'css'.DS.'admin';
const IMG_PATH = PUBLIC_PATH.DS.'asset/img/admin/';



