<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($connection);

// realizo processos de definição da turma

$connection->beginTransaction();

try {
    $aStudent = new Student(
        null,
        'Nico Steppat',
        new DateTimeImmutable('1985-05-01'),
    );
    $studentRepository->save($aStudent);

    $anotherStudent = new Student(
        null,
        'Sergio',
        new DateTimeImmutable('1985-05-01'),
    );
    $studentRepository->save($anotherStudent);

    $connection->commit();
} catch (\PDOException $e) {
    echo $e->getMessage();
    $connection->rollBack();
}