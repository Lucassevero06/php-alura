<?php

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infra\Persistence\ConnectionCreator;
use Alura\Pdo\Infra\Repository\PdoStudentRepository;

require_once 'vendor/autoload.php';

$connection = ConnectionCreator::createConnection();
$repository = new PdoStudentRepository($connection);

/** @var Student[] $studentList */
$studentList = $repository->studentsWithPhones();

echo $studentList[1]->phones()[0]->formattedPhone();
var_dump($studentList);
