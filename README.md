## Php Movies

Proyecto PHP de ejemplo para gestionar peliculas.

### Funcionalidad actual

- La clase `PhpMovies` incluye el metodo `helloWorld()`.
- Permite registrar categorias con `addCategory(string $category)`.
- Permite listar las categorias registradas con `getCategories()`.

### Ejemplo

```php
$phpMovies = new PhpMovies();
$phpMovies->addCategory('Accion');
$phpMovies->addCategory('Ciencia ficcion');

print_r($phpMovies->getCategories());
```
