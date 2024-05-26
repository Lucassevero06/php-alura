<?php

require 'vendor/autoload.php';
require_once 'src/Buscador.php';

use Alura\BuscadorDeCursos\Buscador;
use GuzzleHttp\Client;
use Symfony\Component\DomCrawler\Crawler;

$client = new Client(['base_uri' => 'https://cursos.alura.com.br/']);
$crawler = new Crawler();

$buscador = new Buscador($client, $crawler);
$cursos = $buscador->buscar('/category/programacao/php');

foreach ($cursos as $curso) {
    echo $curso . PHP_EOL;
}
