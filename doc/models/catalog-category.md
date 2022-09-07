
# Catalog Category

A category to which a `CatalogItem` instance belongs.

## Structure

`CatalogCategory`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The category name. This is a searchable attribute for use in applicable query filters, and its value length is of Unicode code points.<br>**Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |
| `abbreviation` | `?string` | Optional | The text of the category's tile in the Square Point of Sale app. Only up to the first five characters of the string are used.<br>**Constraints**: *Maximum Length*: `255` | getAbbreviation(): ?string | setAbbreviation(?string abbreviation): void |
| `labelColor` | `?string` | Optional | The color of the category's tile in the Square Point of Sale app. This must be a valid hex color code without the leading '#'.<br>**Constraints**: *Maximum Length*: `8` | getLabelColor(): ?string | setLabelColor(?string labelColor): void |
| `imageIds` | `?(string[])` | Optional | The IDs of images associated with this `CatalogCategory` instance.<br>Currently these images are not displayed by Square, but are free to be displayed in 3rd party applications. | getImageIds(): ?array | setImageIds(?array imageIds): void |
| `parentCategory` | [`?CatalogObjectCategory`](../../doc/models/catalog-object-category.md) | Optional | Represents the relationship between a category (i.e., as a parent category) and an item or another category.<br>For example, a t-shirt item or pants category can be categorized under the clothing category. | getParentCategory(): ?CatalogObjectCategory | setParentCategory(?CatalogObjectCategory parentCategory): void |
| `isTopLevel` | `?bool` | Optional | Indicates whether a category is a top level category (i.e. doesn't have a parent_category) | getIsTopLevel(): ?bool | setIsTopLevel(?bool isTopLevel): void |

## Example (as JSON)

```json
{
  "object": {
    "category_data": {
      "name": "Beverages"
    },
    "id": "#Beverages",
    "present_at_all_locations": true,
    "type": "CATEGORY"
  }
}
```

