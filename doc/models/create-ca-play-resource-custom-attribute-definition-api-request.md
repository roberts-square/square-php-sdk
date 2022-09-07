
# Create Ca Play Resource Custom Attribute Definition Api Request

Represents a create request for a `CustomAttributeDefinition` object.

## Structure

`CreateCaPlayResourceCustomAttributeDefinitionApiRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customAttributeDefinition` | [`CustomAttributeDefinition`](../../doc/models/custom-attribute-definition.md) | Required | Represents a definition for custom attribute values. A custom attribute definition<br>specifies the key, visibility, schema, and other properties for a custom attribute. | getCustomAttributeDefinition(): CustomAttributeDefinition | setCustomAttributeDefinition(CustomAttributeDefinition customAttributeDefinition): void |
| `idempotencyKey` | `?string` | Optional | A unique string that identifies this request.<br>Keys can be any string with a max length of 45, but must be unique for every request.<br>For more information, see [Idempotency](https://developer.squareup.com/docs/basics/api101/idempotency).<br>**Constraints**: *Maximum Length*: `45` | getIdempotencyKey(): ?string | setIdempotencyKey(?string idempotencyKey): void |

## Example (as JSON)

```json
{
  "custom_attribute_definition": {
    "key": null,
    "schema": null,
    "name": null,
    "description": null,
    "visibility": null,
    "version": null
  },
  "idempotency_key": null
}
```

