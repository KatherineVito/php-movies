## Php Movies

Proyecto PHP de ejemplo para gestionar peliculas.

### Funcionalidad actual

**Peliculas:**
- Permite registrar peliculas con `addMovie(string $title)`.
- Permite listar las peliculas registradas con `getMovies()`.

**Categorias:**
- Permite registrar categorias con `addCategory(string $category)`.
- Permite listar las categorias registradas con `getCategories()`.
- Permite eliminar categorias con `removeCategory(string $category)`.

### Ejemplo

```php
$phpMovies = new PhpMovies();

$phpMovies->addMovie('Inception');
$phpMovies->addMovie('Interstellar');
print_r($phpMovies->getMovies());

$phpMovies->addCategory('Accion');
$phpMovies->addCategory('Ciencia ficcion');
$phpMovies->removeCategory('Accion');
print_r($phpMovies->getCategories());
```
