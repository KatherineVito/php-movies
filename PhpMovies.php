<?php

class PhpMovies
{
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
