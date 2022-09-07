
# Bulk Upsert Order Custom Attributes Response

Represents a response from a bulk upsert request containing the upsert responses.

## Structure

`BulkUpsertOrderCustomAttributesResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | The errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `values` | [`array<string,UpsertOrderCustomAttributeResponse>`](../../doc/models/upsert-order-custom-attribute-response.md) | Required | - | getValues(): array | setValues(array values): void |

## Example (as JSON)

```json
{
  "errors": null,
  "values": {
    "key0": {
      "custom_attribute": null,
      "errors": null
    },
    "key1": {
      "custom_attribute": null,
      "errors": null
    },
    "key2": {
      "custom_attribute": null,
      "errors": null
    }
  }
}
```

