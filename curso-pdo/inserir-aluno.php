<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;

require_once 'vendor/autoload.php';

$pdo = new ConnectionCreator::createConnection();

$student = new Student(
    null,
    'Sla',
    new \DateTimeImmutable('2000-06-06')
);
//$name = $student->name();

$sqlInsert = "INSERT INTO students (name, birth_date) VALUES (:name, :birth_date);"; //parametros SQL
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name()); // uma forma de segurança contra SQL injections, evitando problemas com SQL
$statement->bindValue(':birth_date', $student->birthDate()->format('Y-m-d'));

if ($statement->execute()) {
    echo "Aluno incluido";
}
