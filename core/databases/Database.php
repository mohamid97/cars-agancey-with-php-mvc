<?php

namespace cars\core\databases;

class Database
{

    private static $_instance;

    protected static function init()
    {
        try {

           return self::$_instance =   new \PDO(
                'mysql:hostname=' . $_ENV['HOST_NAME'] . ';dbname=' . $_ENV['DB_NAME'],
                $_ENV['DB_USER_NAME'], $_ENV['DB_USER_PASSWORD'], array(
                    \PDO::ATTR_ERRMODE => \PDO::ERRMODE_WARNING,
                    \PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
                )
            );
        } catch (\PDOException $e) {
           echo $e;
        }
    }


    // get instance with singlton pattern
    public static function getInstance()
    {
        if(self::$_instance === null) {
            self::$_instance = self::init();
        }
        return self::$_instance;
    }


}