# Revisar errores PHP

Usa este flujo basico cuando quieras detectar un error de PHP en un archivo:

1. Ejecuta la validacion sintactica:
```bash
php -l archivo.php
```

2. Si el comando muestra un error, imprime un mensaje simple en pantalla:
```bash
echo "Hay un error de PHP"
```

3. Reemplaza `archivo.php` por el archivo que quieras revisar.

4. Si quieres mostrar en pantalla que existe un problema en el archivo revisado, usa un mensaje simple y generico:
```bash
echo "Hay un error en el archivo PHP"
```

5. Cuando termines de ejecutar todo, imprime esto:
```bash
echo "Ya termine de ejecutar revisar errores"
```
