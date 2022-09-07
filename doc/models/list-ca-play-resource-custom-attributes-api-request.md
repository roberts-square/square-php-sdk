
# List Ca Play Resource Custom Attributes Api Request

Represents a list request for `CustomAttribute` objects.

## Structure

`ListCaPlayResourceCustomAttributesApiRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `visibilityFilter` | [`?string (VisibilityFilter)`](../../doc/models/visibility-filter.md) | Optional | Enumeration of visibility-filter values used to set the ability to view custom attributes or custom attribute definitions. | getVisibilityFilter(): ?string | setVisibilityFilter(?string visibilityFilter): void |
| `cursor` | `?string` | Optional | A pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results for your original query.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination). | getCursor(): ?string | setCursor(?string cursor): void |
| `limit` | `?int` | Optional | A limit on the number of results to be returned in a single page. The limit is advisory -<br>the implementation may return more or fewer results. If the supplied limit is negative, zero, or<br>is higher than the maximum limit of 100, the request will fail. Default value: 20.<br>For more information, see [Pagination](https://developer.squareup.com/docs/working-with-apis/pagination).<br>**Constraints**: `>= 1`, `<= 100` | getLimit(): ?int | setLimit(?int limit): void |
| `withDefinitions` | `?bool` | Optional | If `true`, the matching `CustomAttributeDefinition` object will be included in each result on the `definition` field.<br>This flag could be used to avoid making separate calls for the definition and values. | getWithDefinitions(): ?bool | setWithDefinitions(?bool withDefinitions): void |

## Example (as JSON)

```json
{
  "visibility_filter": null,
  "cursor": null,
  "limit": null,
  "with_definitions": null
}
```

