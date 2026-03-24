<?php

class PhpMovies
{
    private array $movies = [];
    private array $categories = [];
    private array $topMovies = [
        'Inside Out 2',
        'Mufasa: The Lion King',
        'Sonic the Hedgehog 3',
        'Snow White',
        'Lilo & Stitch',
    ];

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

    public function addCategory(string $category): void
    {
        $category = trim($category);

        if ($category === '') {
            throw new InvalidArgumentException('La categoria no puede estar vacia.');
        }

        $this->categories[] = $category;
    }

    public function getCategories(): array
    {
        return $this->categories;

    }

    public function getTopFiveMovies(): array
    {
        return $this->topMovies;
    }
}
