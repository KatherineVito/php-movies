<?php

require_once __DIR__ . '/PhpMovies.php';

$phpMovies = new PhpMovies();
$phpMovies->addMovie('Matrix');

echo $phpMovies->helloWorld() . PHP_EOL;
echo 'Peliculas registradas: ' . implode(', ', $phpMovies->getMovies()) . PHP_EOL;
