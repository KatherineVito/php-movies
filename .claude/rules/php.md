---
paths:
  - "**/*.php"
---

# Reglas PHP

- Validar siempre los parámetros de entrada con `trim()` y verificar que no estén vacíos.
- Usar `InvalidArgumentException` para errores de validación.
- Los métodos deben tener tipos de retorno declarados (`: string`, `: array`, `: void`, etc.).
- Los arrays internos deben declararse como `private array`.
