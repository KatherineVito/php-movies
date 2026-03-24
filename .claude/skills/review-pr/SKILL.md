---
name: review-pr
description: Usa este skill cuando quieras pasar un PR de draft a ready for review.
allowed-tools: Bash(gh pr list:*), Bash(gh pr view:*), Bash(gh pr ready:*), Bash(gh pr edit:*), Bash(gh label create:*)
---

# Flujo

1. Si el usuario no indicó el número de PR, preguntarlo:
   > "¿Cuál es el número de PR que quieres poner en review?"

2. Si se dio un número de ticket en lugar de un número de PR, buscar el PR por número de PR directamente o listar los PRs abiertos para que el usuario identifique el correcto:
```bash
gh pr list --json number,title,isDraft
```

3. Confirmar con el usuario que es el PR correcto antes de continuar.

4. Pasar el PR de draft a ready for review:
```bash
gh pr ready <numero-de-pr>
```

5. Agregar el label `enhancement`:
```bash
gh pr edit <numero-de-pr> --add-label "enhancement"
```

6. Asignarlo a ti mismo:
```bash
gh pr edit <numero-de-pr> --add-assignee "@me"
```

7. Mostrar el estado final del PR:
```bash
gh pr view <numero-de-pr>
```

## Reglas

- Siempre confirmar el PR con el usuario antes de hacer cambios.
- Si el label `enhancement` no existe en el repositorio, crearlo primero con `gh label create enhancement --color "#84b6eb"`.
- Si el PR ya no está en draft, continuar con los pasos de label y assignee igualmente.
