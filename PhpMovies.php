<?php

class PhpMovies
{
    private array $movies = [];

    public function helloWorld(): string
    {
        return 'Hola, Peliculas';
    }

    public function addMovie(string $title): void
    {
        $title = trim($title);

        if ($title === '') {
            throw new InvalidArgumentException('El titulo de la pelicula no puede estar vacio.');
        }

        $this->movies[] = $title;
    }

    public function getMovies(): array
    {
        return $this->movies;
    }
}
