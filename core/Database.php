<?php
/**
 * Created by PhpStorm.
 * User: CesarJose39
 * Date: 08/08/2018
 * Time: 16:28
 */

use PDO;

class Database{
    private static $db;

    public static function getConnection(){
        if(empty(self::$db)){
            $pdo = new PDO('mysql:host=localhost;dbname=segciurobos;charset=utf8','root','');

            //Sirve para indicar al PDO que todo lo que retorne sean objetos
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            //Sirve para indicar que si encuentra error, los muestre
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            self::$db = $pdo;

        }

        return self::$db;
    }
}