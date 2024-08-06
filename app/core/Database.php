<?php

namespace app\core;

use PDO;
use PDOException;

class Database
{
    public static function connect()
    {
        $host = getenv('MYSQL_HOST') ?: 'localhost';
        $dbname = getenv('MYSQL_DATABASE') ?: 'googleLogin';
        $user = getenv('MYSQL_USER') ?: 'root';
        $password = getenv('MYSQL_PASSWORD') ?: '';

        try {
            return new PDO("mysql:host=$host;dbname=$dbname", $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
            ]);
        } catch (PDOException $e) {
            die("Erro ao conectar ao banco de dados: " . $e->getMessage());
        }
    }
}
