<?php

class PhpMovies
{
    private array $categories = [];

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
}
