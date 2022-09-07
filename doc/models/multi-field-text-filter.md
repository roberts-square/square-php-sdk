
# Multi Field Text Filter

A filter for specifying which attributes to consider in a text search.

## Structure

`MultiFieldTextFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `textFilter` | `?string` | Optional | The text to search for. | getTextFilter(): ?string | setTextFilter(?string textFilter): void |
| `fields` | [`?MultiFieldTextFilterFieldValues`](../../doc/models/multi-field-text-filter-field-values.md) | Optional | Specifies how each attribute should be considered when filtering. | getFields(): ?MultiFieldTextFilterFieldValues | setFields(?MultiFieldTextFilterFieldValues fields): void |

## Example (as JSON)

```json
{
  "text_filter": null,
  "fields": null
}
```

