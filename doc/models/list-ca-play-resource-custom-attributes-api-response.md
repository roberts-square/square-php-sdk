
# List Ca Play Resource Custom Attributes Api Response

Represents a response from a list request containing a list of `CustomAttribute` objects.

## Structure

`ListCaPlayResourceCustomAttributesApiResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `customAttributes` | [`?(CustomAttribute[])`](../../doc/models/custom-attribute.md) | Optional | The list of `CustomAttribute` objects. | getCustomAttributes(): ?array | setCustomAttributes(?array customAttributes): void |
| `cursor` | `?string` | Optional | A pagination cursor to retrieve the next set of results for the<br>original query. A cursor is only present if the request succeeded and additional results<br>are available.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). | getCursor(): ?string | setCursor(?string cursor): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | The errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "custom_attributes": null,
  "cursor": null,
  "errors": null
}
```

