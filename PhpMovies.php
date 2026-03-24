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

    public function addMovie(string $title, int $year, string $genre): void
    {
        $title = trim($title);
        $genre = trim($genre);

        if ($title === '') {
            throw new InvalidArgumentException('El titulo no puede estar vacio.');
        }

        if ($year < 1888 || $year > (int) date('Y')) {
            throw new InvalidArgumentException('El año no es valido.');
        }

        if ($genre === '') {
            throw new InvalidArgumentException('El genero no puede estar vacio.');
        }

        $this->movies[] = [
            'title' => $title,
            'year'  => $year,
            'genre' => $genre,
        ];
    }

    public function getMovies(): array
    {
        return $this->movies;
    }

    public function getMoviesByGenre(string $genre): array
    {
        $genre = trim($genre);

        return array_values(array_filter(
            $this->movies,
            fn($movie) => strcasecmp($movie['genre'], $genre) === 0
        ));
    }

    public function getMoviesByYear(int $year): array
    {
        return array_values(array_filter(
            $this->movies,
            fn($movie) => $movie['year'] === $year
        ));
    }
}
