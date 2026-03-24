<?php

require_once __DIR__ . '/PhpMovies.php';

$phpMovies = new PhpMovies();
$phpMovies->addCategory('Accion');
$phpMovies->addCategory('Ciencia ficcion');

$phpMovies->addMovie('Interstellar');
$phpMovies->addMovie('Matrix');

echo $phpMovies->helloWorld() . PHP_EOL;
echo 'Categorias registradas: ' . implode(', ', $phpMovies->getCategories()) . PHP_EOL;
echo 'Peliculas registradas: ' . implode(', ', $phpMovies->getMovies()) . PHP_EOL;
