# CLAUDE.md — php-movies

## Descripción del proyecto
Proyecto PHP de ejemplo para gestionar películas y categorías mediante la clase `PhpMovies`.

## Archivos principales
- `PhpMovies.php` — Clase principal con toda la lógica
- `index.php` — Punto de entrada de ejemplo

## Convenciones de commits
Seguir las convenciones definidas en `.claude/skills/commit-message/convenciones.md`:
- Idioma: español
- Formato: `<prefijo>: <descripción corta>` (máx. 80 caracteres, sin punto al final)
- Si hay número de ticket, usarlo como prefijo: `COS-XX: <descripción>`

## Flujo de trabajo
1. Crear rama descriptiva basada en los cambios
2. Hacer commit siguiendo las convenciones
3. Crear PR en modo **draft** con `gh pr create --draft`
4. Usar `.claude/skills/crear-pr/pr-template.md` como base para el body del PR

## Skills disponibles
- `commit-message` — Genera el mensaje de commit según convenciones
- `crear-pr` — Crea rama, commit y PR completo
- `revisar-errores` — Detecta errores de PHP en archivos
- `update-readme` — Actualiza el README cuando hay cambios importantes
- `actualizar-main-branch` — Actualiza la rama main
- `review-pr` — Pasa un PR de draft a ready for review
- `explain-code` — Explica el código con diagramas y analogías
