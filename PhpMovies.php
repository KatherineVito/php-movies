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

    public function removeCategory(string $category): void
    {
        $category = trim($category);
        $key = array_search($category, $this->categories, true);

        if ($key === false) {
            throw new InvalidArgumentException("La categoria '{$category}' no existe.");
        }

        array_splice($this->categories, $key, 1);
    }
}
