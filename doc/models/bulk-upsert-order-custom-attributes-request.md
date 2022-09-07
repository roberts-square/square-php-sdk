
# Bulk Upsert Order Custom Attributes Request

Represents a bulk upsert request for `CustomAttribute` objects.

## Structure

`BulkUpsertOrderCustomAttributesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `values` | [`array<string,BulkUpsertOrderCustomAttributesRequestUpsertCustomAttribute>`](../../doc/models/bulk-upsert-order-custom-attributes-request-upsert-custom-attribute.md) | Required | The data used to update the `CustomAttribute` objects.<br>The keys must be unique and are used to map to the corresponding response. | getValues(): array | setValues(array values): void |

## Example (as JSON)

```json
{
  "values": {
    "key0": {
      "custom_attribute": {
        "key": null,
        "value": null,
        "version": null,
        "visibility": null,
        "definition": null
      },
      "idempotency_key": null
    },
    "key1": {
      "custom_attribute": {
        "key": null,
        "value": null,
        "version": null,
        "visibility": null,
        "definition": null
      },
      "idempotency_key": null
    },
    "key2": {
      "custom_attribute": {
        "key": null,
        "value": null,
        "version": null,
        "visibility": null,
        "definition": null
      },
      "idempotency_key": null
    }
  }
}
```

