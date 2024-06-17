<?php

use Alura\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = new ConnectionCreator::createConnection();

$preparedStatement = $pdo->prepare('DELETE FROM students WHERE id = ?;');
$preparedStatement->bindValue(1, 9, PDO::PARAM_INT);

if ($preparedStatement->execute()) {
    echo "Aluno excluido";
}
