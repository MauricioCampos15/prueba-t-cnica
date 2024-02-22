<?php

namespace App\Database;

use PDO;

class DatabaseConector
{
    public static function connect(): PDO
    {
        $host = 'sql308.infinityfree.com';
        $db   = 'if0_36025460_acme';
        $user = 'if0_36025460';
        $pass = 'RCzG9RmLdARk';
        $charset = 'utf8mb4';


        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        return new PDO($dsn, $user, $pass, $opt);
    }

    public static function query(string $query): array
    {
        $pdo = self::connect();
        $stmt = $pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function execute(string $query): void
    {
        $pdo = self::connect();
        $pdo->exec($query);
    }
}