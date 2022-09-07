
# Get Ca Play Resource Custom Attribute Api Request

Represents a get request for a `CustomAttribute` object.

## Structure

`GetCaPlayResourceCustomAttributeApiRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `version` | `?int` | Optional | Used for optimistic concurrency. The `version` of the `CustomAttribute` returned will be<br>at least equal to the version set. | getVersion(): ?int | setVersion(?int version): void |
| `withDefinition` | `?bool` | Optional | If `true`, the matching `CustomAttributeDefinition` object will be included in the result's `definition` field<br>This flag could be used to avoid making separate calls for the definition and values. | getWithDefinition(): ?bool | setWithDefinition(?bool withDefinition): void |

## Example (as JSON)

```json
{
  "version": null,
  "with_definition": null
}
```

