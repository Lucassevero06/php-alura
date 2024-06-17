<?php

use Alura\Pdo\Domain\Repository\StudentRepository;

function enviaEmail(StudentRepository $studentRepository)
{
    $studentList = $studentRepository->studentsBirthAt(new \DateTimeImmutable());

}