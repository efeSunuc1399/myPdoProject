<?php

class DB {

    private static $dbConnection;

    public static function connectDb(){
        if(self::$dbConnection === null){
            self::$dbConnection = new PDO('mysql:host=localhost;dbname=my_pdo_project;charset=utf8', 'root', '');
            self::$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        }
        return self::$dbConnection;
    }
}