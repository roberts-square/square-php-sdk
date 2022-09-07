
# Sort

Specifies how the variations returned by the search are sorted by designating a sort field and a sort order.

## Structure

`Sort`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `field` | [`?string (SortSortField)`](../../doc/models/sort-sort-field.md) | Optional | The field by which to sort the returned results. | getField(): ?string | setField(?string field): void |
| `order` | [`?string (SortOrder)`](../../doc/models/sort-order.md) | Optional | The order (e.g., chronological or alphabetical) in which results from a request are returned. | getOrder(): ?string | setOrder(?string order): void |
| `locationId` | `?string` | Optional | For location-specific sorts, the location at which to sort.<br>Currently only applicable when the sort field is INVENTORY_COUNT. | getLocationId(): ?string | setLocationId(?string locationId): void |

## Example (as JSON)

```json
{
  "field": null,
  "order": null,
  "location_id": null
}
```

