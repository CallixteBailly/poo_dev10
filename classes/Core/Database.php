<?php
namespace Aston\Core;
/**
 * Singleton soon.
 */
class Database
{
    private static $class;
    private static $connection = null;

    public static function getConnection($class)
    {
        self::$class = $class;
        if (is_null(self::$connection))
        {
            self::$connection = new self::$class("mysql:host=localhost;dbname=aston;","root","paris");
            print 'Singleton appelé !';
        }
        return self::$connection;
    }

}