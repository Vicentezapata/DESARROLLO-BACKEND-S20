<?php

class Database{
    private static $connection = null;

    public static function conectar(){
        if(self::$connection === null){
            try {
                $host = 'localhost'; // Cambiar si es necesario
                $dbname = 'landing_page'; // Cambiar por el nombre de tu base de datos
                $username = 'root'; // Cambiar por tu usuario de la base de datos
                $password = ''; // Cambiar por tu contraseña de la base de datos
                self::$connection = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
                self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Error de conexión a la base de datos: " . $e->getMessage());
            }
        }
        return self::$connection;
    }
}

