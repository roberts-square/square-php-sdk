
# Bulk Delete Ca Play Resource Custom Attributes Api Request Delete Custom Attribute

Represents a delete request for a `CustomAttribute` object in a BulkDeleteCaPlayResourceCustomAttributes request

## Structure

`BulkDeleteCaPlayResourceCustomAttributesApiRequestDeleteCustomAttribute`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `definitionId` | `?string` | Optional | The id of the associated custom attribute definition. | getDefinitionId(): ?string | setDefinitionId(?string definitionId): void |
| `key` | `?string` | Optional | The key of the associated custom attribute definition.<br>Represented as a qualified key if the requesting app is not the definition owner.<br>**Constraints**: *Pattern*: `^([a-zA-Z0-9_-]+:)?[a-zA-Z0-9_-]{1,60}$` | getKey(): ?string | setKey(?string key): void |
| `hardDelete` | `?bool` | Optional | If set to `true`, the object will be deleted without possibility of recovery. | getHardDelete(): ?bool | setHardDelete(?bool hardDelete): void |

## Example (as JSON)

```json
{
  "hard_delete": null
}
```

