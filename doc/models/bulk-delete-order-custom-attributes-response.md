
# Bulk Delete Order Custom Attributes Response

Represents a response from a bulk delete request containing the delete responses.

## Structure

`BulkDeleteOrderCustomAttributesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | The errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `values` | [`array<string,DeleteOrderCustomAttributeResponse>`](../../doc/models/delete-order-custom-attribute-response.md) | Required | - | getValues(): array | setValues(array values): void |

## Example (as JSON)

```json
{
  "errors": null,
  "values": {
    "key0": {
      "errors": null
    },
    "key1": {
      "errors": null
    },
    "key2": {
      "errors": null
    }
  }
}
```

