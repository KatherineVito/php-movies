---
name: crear-pr
description: Usa este skill cuando necesites subir cambios a un PR.
---

# Flujo

1. Revisa los cambios actuales para entender qué se modificó y proponer un nombre de rama relacionado con esos cambios.

2. Crea la rama nueva:
```bash
git checkout -b nombre-de-rama
```

3. Ejecuta el skill [`revisar-errores`](./revisar-errores.md) sobre los archivos PHP modificados.

4. Soluciona los errores en los archivos.

5. Agrega los archivos modificados al git:
```bash
git add archivo1 archivo2
```

6. Crea un commit con un mensaje corto
```bash
git commit -m "mensaje del commit"
```

7. Pushea la rama
```bash
git push -u origin nombre-de-rama
```

8. Crea el PR en modo draft usando `templates/pr-template.md` como base para el body. Completa el numero de ticket, `Description`, `Steps` y `Notes` en un archivo temporal y usa ese archivo para crear el PR. El titulo del PR sera el nombre de la branch.
```bash
gh pr create --draft --title "titulo-del-pr" --body-file archivo-temporal-del-pr.md
```

9. Abrir el PR creado
```bash
gh pr view --web
```

## Reglas

- El nombre de la rama debe describir los cambios hechos.
- El mensaje del commit debe ser concreto y consistente con los archivos modificados.
- Si hay errores al ejecutar `revisar-errores`, corrígelos antes de hacer commit y push.
- Si faltan datos para el título o cuerpo del PR, genera una propuesta breve basada en el diff.
- Mostrar siempre el PR creado
- Usar siempre `templates/pr-template.md` como base del body del PR.
- Reemplazar el ticket por el ticket real antes de crear el PR.
- Completar `Description`, `Steps` y `Notes` con informacion concreta del diff.
- Si falta el ticket, pedirlo o dejar un marcador claro para completarlo.
