
# Bulk Delete Order Custom Attributes Request

Represents a bulk delete request for `CustomAttribute` objects.

## Structure

`BulkDeleteOrderCustomAttributesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `values` | [`array<string,BulkDeleteOrderCustomAttributesRequestDeleteCustomAttribute>`](../../doc/models/bulk-delete-order-custom-attributes-request-delete-custom-attribute.md) | Required | The data used to update the `CustomAttribute` objects.<br>The keys must be unique and are used to map to the corresponding response. | getValues(): array | setValues(array values): void |

## Example (as JSON)

```json
{
  "values": {
    "key0": {},
    "key1": {},
    "key2": {}
  }
}
```

