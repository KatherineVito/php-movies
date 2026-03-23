<?php

require_once __DIR__ . '/PhpMovies.php';

$phpMovies = new PhpMovies();
$phpMovies->addCategory('Accion');
$phpMovies->addCategory('Ciencia ficcion');

echo $phpMovies->helloWorld() . PHP_EOL;
echo 'Categorias registradas: ' . implode(', ', $phpMovies->getCategories()) . PHP_EOL;
echo 'Top 5 peliculas: ' . implode(', ', $phpMovies->getTopFiveMovies()) . PHP_EOL;
