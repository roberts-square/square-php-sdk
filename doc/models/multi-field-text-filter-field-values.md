
# Multi Field Text Filter Field Values

Specifies how each attribute should be considered when filtering.

## Structure

`MultiFieldTextFilterFieldValues`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `any` | [`?(string[]) (MultiFieldTextFilterSearchField)`](../../doc/models/multi-field-text-filter-search-field.md) | Optional | Search text must appear in any of these attributes.<br>See [SearchField](#type-searchfield) for possible values | getAny(): ?array | setAny(?array any): void |
| `all` | [`?(string[]) (MultiFieldTextFilterSearchField)`](../../doc/models/multi-field-text-filter-search-field.md) | Optional | Search text must appear in all of these attributes.<br>See [SearchField](#type-searchfield) for possible values | getAll(): ?array | setAll(?array all): void |
| `none` | [`?(string[]) (MultiFieldTextFilterSearchField)`](../../doc/models/multi-field-text-filter-search-field.md) | Optional | Search text must appear in none of these attributes.<br>See [SearchField](#type-searchfield) for possible values | getNone(): ?array | setNone(?array none): void |

## Example (as JSON)

```json
{
  "any": null,
  "all": null,
  "none": null
}
```

