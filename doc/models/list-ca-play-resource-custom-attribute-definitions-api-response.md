
# List Ca Play Resource Custom Attribute Definitions Api Response

Represents a response from a list request containing a list of `CustomAttributeDefinition` objects.

## Structure

`ListCaPlayResourceCustomAttributeDefinitionsApiResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customAttributeDefinitions` | [`CustomAttributeDefinition[]`](../../doc/models/custom-attribute-definition.md) | Required | The list of `CustomAttributeDefinition` objects. | getCustomAttributeDefinitions(): array | setCustomAttributeDefinitions(array customAttributeDefinitions): void |
| `cursor` | `?string` | Optional | A pagination cursor to retrieve the next set of results for the<br>original query. A cursor is only present if the request succeeded and additional results<br>are available.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). | getCursor(): ?string | setCursor(?string cursor): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | The errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "custom_attribute_definitions": [
    {
      "key": null,
      "schema": null,
      "name": null,
      "description": null,
      "visibility": null,
      "version": null
    }
  ],
  "cursor": null,
  "errors": null
}
```

