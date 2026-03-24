---
name: actualizar-main-branch
description: Usa este skill cuando necesites actualizar tu rama main.
allowed-tools: Bash(git checkout:*), Bash(git fetch:*), Bash(git stash:*), Bash(git pull:*)
---

# Flujo

1. Cambia a la rama `main`:
```bash
git checkout main
```

2. Haz un fetch:
```bash
git fetch origin
```

3. Guarda temporalmente los cambios locales:
```bash
git stash save
```

4. Actualiza `main`:
```bash
git pull origin main
```

5. Recupera los cambios guardados:
```bash
git stash pop
```

## Reglas

- Ejecutar los comandos en ese mismo orden.
- Si existe un conflicto al hacer `git stash pop`, revisarlo antes de seguir trabajando.
