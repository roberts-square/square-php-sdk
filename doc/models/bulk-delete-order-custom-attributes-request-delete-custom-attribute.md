
# Bulk Delete Order Custom Attributes Request Delete Custom Attribute

Represents a delete request for a `CustomAttribute` object in a BulkDeleteOrderCustomAttributes request

## Structure

`BulkDeleteOrderCustomAttributesRequestDeleteCustomAttribute`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `definitionId` | `?string` | Optional | The id of the associated custom attribute definition. | getDefinitionId(): ?string | setDefinitionId(?string definitionId): void |
| `key` | `?string` | Optional | The key of the associated custom attribute definition.<br>Represented as a qualified key if the requesting app is not the definition owner.<br>**Constraints**: *Pattern*: `^([a-zA-Z0-9_-]+:)?[a-zA-Z0-9_-]{1,60}$` | getKey(): ?string | setKey(?string key): void |

## Example (as JSON)

```json
{}
```

