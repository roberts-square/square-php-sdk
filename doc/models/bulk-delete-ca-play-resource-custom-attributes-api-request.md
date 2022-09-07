
# Bulk Delete Ca Play Resource Custom Attributes Api Request

Represents a bulk delete request for `CustomAttribute` objects.

## Structure

`BulkDeleteCaPlayResourceCustomAttributesApiRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `values` | [`array<string,BulkDeleteCaPlayResourceCustomAttributesApiRequestDeleteCustomAttribute>`](../../doc/models/bulk-delete-ca-play-resource-custom-attributes-api-request-delete-custom-attribute.md) | Required | The data used to update the `CustomAttribute` objects.<br>The keys must be unique and is used to map to the corresponding response. | getValues(): array | setValues(array values): void |

## Example (as JSON)

```json
{
  "values": {
    "key0": {
      "hard_delete": null
    },
    "key1": {
      "hard_delete": null
    },
    "key2": {
      "hard_delete": null
    }
  }
}
```

