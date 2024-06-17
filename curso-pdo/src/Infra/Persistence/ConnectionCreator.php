<?php

namespace Alura\Pdo\Infra\Persistence;

use PDO;

class ConnectionCreator
{

    public static function createConnection(): PDO
    {
        $caminhoBanco = __DIR__ . '/../../../banco.sqlite';

        $connection = new PDO('sqlite:' . $caminhoBanco);
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $connection;
    }
}