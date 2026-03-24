# Convenciones de commits

## Idioma
- Siempre en español.

## Formato
```
<prefijo>: <descripción corta>
```
- Una sola línea.
- Máximo 80 caracteres.
- Sin punto al final.

## Prefijos

| Prefijo | Cuándo usarlo |
|---------|--------------|
| `feat:` | Se agrega funcionalidad nueva |
| `fix:` | Se corrige un bug o error |
| `chore:` | Cambios de mantenimiento (dependencias, config, etc.) |
| `refactor:` | Cambios en el código sin agregar funcionalidad ni corregir bugs |
| `docs:` | Solo se modifica documentación |
| `test:` | Se agregan o modifican pruebas |

## Ticket
- Si el usuario proporciona un número de ticket (ej: `COS-62`), usarlo en lugar del prefijo:
```
COS-62: <descripción corta>
```
