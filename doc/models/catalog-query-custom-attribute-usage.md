
# Catalog Query Custom Attribute Usage

## Structure

`CatalogQueryCustomAttributeUsage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customAttributeDefinitionIds` | `?(string[])` | Optional | The set of Custom Attribute Definition ids to search for. | getCustomAttributeDefinitionIds(): ?array | setCustomAttributeDefinitionIds(?array customAttributeDefinitionIds): void |
| `hasValue` | `?bool` | Optional | If true, search for objects that contain a value for all of the given<br>definitions. If false, search for objects that do not contain a value for<br>and of the given definitions. | getHasValue(): ?bool | setHasValue(?bool hasValue): void |

## Example (as JSON)

```json
{
  "custom_attribute_definition_ids": null,
  "has_value": null
}
```

