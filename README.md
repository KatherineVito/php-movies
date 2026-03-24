## Php Movies

Proyecto PHP de ejemplo para gestionar peliculas.

### Funcionalidad actual

- La clase `PhpMovies` incluye el metodo `helloWorld()`.
- Permite registrar categorias con `addCategory(string $category)`.
- Permite listar las categorias registradas con `getCategories()`.
- Permite agregar peliculas con `addMovie(string $title, int $year, string $genre)`.
- Permite listar peliculas con `getMovies()`.
- Permite filtrar peliculas por genero con `getMoviesByGenre(string $genre)`.
- Permite filtrar peliculas por año con `getMoviesByYear(int $year)`.

### Ejemplo

```php
$phpMovies = new PhpMovies();
$phpMovies->addCategory('Accion');
$phpMovies->addCategory('Ciencia ficcion');

print_r($phpMovies->getCategories());
```

### Diagrama de clases

```mermaid
classDiagram
    class PhpMovies {
        -array $categories
        -array $movies

        +helloWorld() string
        +addCategory(string category) void
        +getCategories() array
        +addMovie(string title, int year, string genre) void
        +getMovies() array
        +getMoviesByGenre(string genre) array
        +getMoviesByYear(int year) array
    }
```

### Diagrama de secuencia

```mermaid
sequenceDiagram
    participant I as index.php
    participant P as PhpMovies

    I->>P: new PhpMovies()
    I->>P: addCategory("Accion")
    P-->>I: void
    I->>P: addCategory("Ciencia ficcion")
    P-->>I: void
    I->>P: helloWorld()
    P-->>I: "Hola, Peliculas"
    I->>P: getCategories()
    P-->>I: ["Accion", "Ciencia ficcion"]
```
