<?php
class Database 
{

    public static function getPdo(){

        //DEV or PROD
        $APP_ENV = "DEV";

        if ($APP_ENV == "DEV"){
            
            include "D:/xampp/htdocs/DB-selemusium.php";
            
            /*
            $pdo = new PDO('mysql:host=localhost;dbname=exemple','exemple' ,'exemple', [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
                    PDO::ATTR_PERSISTENT
                ]);
            */

        } else if ($APP_ENV){

            include "/home/tyroliumfg/DB-selemusium.php";

        }

        return $pdo;

    }
}




