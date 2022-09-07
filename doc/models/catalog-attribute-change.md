
# Catalog Attribute Change

Details of a change to a single `CatalogAttribute` in a
`CatalogObjectChange`.

## Structure

`CatalogAttributeChange`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `attributeField` | `?string` | Optional | fully qualified path to field in API if change is NOT to a custom attribute e.g. `"item_data.name"` | getAttributeField(): ?string | setAttributeField(?string attributeField): void |
| `customAttributeId` | `?string` | Optional | id of custom attribute if change is to a custom attribute | getCustomAttributeId(): ?string | setCustomAttributeId(?string customAttributeId): void |
| `attributeDisplayName` | `?string` | Optional | display name of attribute e.g. "Name", "Price", "Vintage" (custom) | getAttributeDisplayName(): ?string | setAttributeDisplayName(?string attributeDisplayName): void |
| `attributeType` | [`?string (CatalogAttributeType)`](../../doc/models/catalog-attribute-type.md) | Optional | Type of a changed CatalogAttribute. | getAttributeType(): ?string | setAttributeType(?string attributeType): void |
| `previousValue` | [`?CatalogAttributeValue`](../../doc/models/catalog-attribute-value.md) | Optional | An object defining the attribute value affected by a `CatalogUpdate` event. | getPreviousValue(): ?CatalogAttributeValue | setPreviousValue(?CatalogAttributeValue previousValue): void |
| `newValue` | [`?CatalogAttributeValue`](../../doc/models/catalog-attribute-value.md) | Optional | An object defining the attribute value affected by a `CatalogUpdate` event. | getNewValue(): ?CatalogAttributeValue | setNewValue(?CatalogAttributeValue newValue): void |
| `nestedChanges` | [`?(CatalogNestedChange[])`](../../doc/models/catalog-nested-change.md) | Optional | If `attribute_type` is `NESTED`, this field will be populated with nested changes. | getNestedChanges(): ?array | setNestedChanges(?array nestedChanges): void |

## Example (as JSON)

```json
{}
```

