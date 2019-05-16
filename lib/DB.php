<?php


class DB
{
    private static $conn;

    private function __construct() {}

    private function __clone() {}

    public static function getConnection()
    {
        if(!self::$conn) {
            self::$conn = mysqli_connect('db', 'root', 'password', 'app_development');
        }

        return self::$conn;

    }

    static function query($sql)
    {
        return mysqli_query(self::getConnection(), $sql);
    }

    public function __destruct()
    {
        mysqli_close(self::getConnection());

        self::$conn = null;
    }
}