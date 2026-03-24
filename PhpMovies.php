<?php

class PhpMovies
{
    private array $categories = [];
    private array $movies = [];

    public function helloWorld(): string
    {
        return 'Hola, Peliculas';
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

    public function addMovie(string $title): void
    {
        $title = trim($title);

        if ($title === '') {
            throw new InvalidArgumentException('El titulo no puede estar vacio.');
        }

        $this->movies[] = $title;
    }

    public function getMovies(): array
    {
        return $this->movies;
    }
}
