<?php

use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infra\PdoStudentRepository;

$pdo = new PDO('sqlite::memory');
$repository = new PdoStudentRepository($pdo);

empty($repository->allStudents());