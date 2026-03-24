---
name: commit-message
description: Usa este skill para generar un mensaje de commit basado en los cambios actuales.
allowed-tools: Bash(git diff:*), Bash(git status:*)
---

# Flujo

1. Revisar los cambios actuales:
```bash
git diff
git status
```

2. Leer las convenciones en [convenciones.md](convenciones.md).

3. Si el usuario proporcionó un número de ticket, usarlo como prefijo. Si no, elegir el prefijo correcto según los cambios.

4. Generar el mensaje de commit siguiendo las convenciones y mostrárselo al usuario para que lo apruebe o ajuste.

## Recursos adicionales
- Reglas y formato: [convenciones.md](convenciones.md)
- Ejemplos de buenos y malos mensajes: [ejemplos.md](ejemplos.md)
