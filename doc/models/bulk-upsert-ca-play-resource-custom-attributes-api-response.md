
# Bulk Upsert Ca Play Resource Custom Attributes Api Response

Represents a response from a bulk upsert request containing the upsert responses.

## Structure

`BulkUpsertCaPlayResourceCustomAttributesApiResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `values` | [`array<string,CustomAttribute>`](../../doc/models/custom-attribute.md) | Required | The responses for the `CustomAttribute` delete requests.<br>The keys correspond to the keys used in the request. | getValues(): array | setValues(array values): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | The errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "values": {
    "key0": {
      "key": null,
      "value": null,
      "version": null,
      "visibility": null,
      "definition": null
    },
    "key1": {
      "key": null,
      "value": null,
      "version": null,
      "visibility": null,
      "definition": null
    },
    "key2": {
      "key": null,
      "value": null,
      "version": null,
      "visibility": null,
      "definition": null
    }
  },
  "errors": null
}
```

