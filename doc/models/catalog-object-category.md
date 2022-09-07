
# Catalog Object Category

Represents the relationship between a category (i.e., as a parent category) and an item or another category.
For example, a t-shirt item or pants category can be categorized under the clothing category.

## Structure

`CatalogObjectCategory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?string` | Optional | The ID of the item's/category's category, if any. | getId(): ?string | setId(?string id): void |
| `ordinal` | `?int` | Optional | The order placement of the item/category, within the category. | getOrdinal(): ?int | setOrdinal(?int ordinal): void |

## Example (as JSON)

```json
{
  "id": null,
  "ordinal": null
}
```

