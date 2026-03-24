---
name: crear-pr
description: Usa este skill cuando necesites subir cambios a un PR.
allowed-tools: Bash(gh pr view:*)
---

# Flujo

1. Revisa los cambios actuales para entender qué se modificó y proponer un nombre de rama relacionado con esos cambios.

2. Crea la rama nueva:
```bash
git checkout -b nombre-de-rama
```

3. Agrega los archivos modificados al git:
```bash
git add archivo1 archivo2
```

4. Genera el mensaje del commit siguiendo las convenciones de [commit-message](../commit-message/convenciones.md) y crea el commit:
```bash
git commit -m "mensaje del commit"
```

5. Pushea la rama
```bash
git push -u origin nombre-de-rama
```

6. Crea el PR en modo draft usando `pr-template.md` (en el mismo directorio que este skill) como base para el body. Completa el numero de ticket, `Description`, `Test` y `Notes` en un archivo temporal y usa ese archivo para crear el PR. El titulo del PR sera el nombre de la branch.
```bash
gh pr create --draft --title "titulo-del-pr" --body-file archivo-temporal-del-pr.md
```

7. Abrir el PR creado
```bash
gh pr view --web
```

## Reglas

- El nombre de la rama debe describir los cambios hechos.
- El mensaje del commit debe seguir las convenciones definidas en `commit-message/convenciones.md`.
- Si faltan datos para el título o cuerpo del PR, genera una propuesta breve basada en el diff.
- Mostrar siempre el PR creado
- Usar siempre `pr-template.md` como base del body del PR.
- Reemplazar el ticket por el ticket real antes de crear el PR.
- Completar `Description`, `Test` y `Notes` con información concreta del diff.
- Si falta el ticket, pedirlo o dejar un marcador claro para completarlo.
