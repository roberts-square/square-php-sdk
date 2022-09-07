
# Catalog Query Filtered Items Custom Attribute Filter

A query filter to search for items or item variations by matching
their custom attribute values against one or more of the supported query expressions.

## Structure

`CatalogQueryFilteredItemsCustomAttributeFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filterType` | [`?string (CatalogQueryFilteredItemsCustomAttributeFilterFilterType)`](../../doc/models/catalog-query-filtered-items-custom-attribute-filter-filter-type.md) | Optional | Supported types of a custom attribute query expression. | getFilterType(): ?string | setFilterType(?string filterType): void |
| `customAttributeDefinitionIds` | `?(string[])` | Optional | The query expression to return items or item variations by matching the<br>`custom_attribute_definition_ids` property of contained custom attribute values<br>against the specified custom attribute definition IDs. | getCustomAttributeDefinitionIds(): ?array | setCustomAttributeDefinitionIds(?array customAttributeDefinitionIds): void |
| `customAttributeValueExact` | `?string` | Optional | The query expression used, when `filter_type = EXACT`, to return items or<br>item variations by matching corresponding custom attribute values against the<br>specified text tokens exactly. Specifying an empty string, you will get<br>all results that have no value for the given custom attribute,<br>either because the specified attribute is not present on the object, or because<br>the attribute has an empty value. | getCustomAttributeValueExact(): ?string | setCustomAttributeValueExact(?string customAttributeValueExact): void |
| `customAttributeValuePrefix` | `?string` | Optional | The query expression used, when `filter_type = PREFIX`, to return items or<br>item variations by matching the start of corresponding custom attribute values<br>against the specified text tokens. | getCustomAttributeValuePrefix(): ?string | setCustomAttributeValuePrefix(?string customAttributeValuePrefix): void |
| `customAttributeMinValue` | `?string` | Optional | The query expression used, when `filter_type = RANGE`, to return items or<br>item variations with corresponding custom attribute numerical values<br>greater than the specified lower bound. | getCustomAttributeMinValue(): ?string | setCustomAttributeMinValue(?string customAttributeMinValue): void |
| `customAttributeMaxValue` | `?string` | Optional | The query expression used, when `filter_type = RANGE`, to return items or<br>item variations with corresponding custom attribute numerical values<br>less than the specified upper bound. | getCustomAttributeMaxValue(): ?string | setCustomAttributeMaxValue(?string customAttributeMaxValue): void |

## Example (as JSON)

```json
{
  "filter_type": null,
  "custom_attribute_definition_ids": null,
  "custom_attribute_value_exact": null,
  "custom_attribute_value_prefix": null,
  "custom_attribute_min_value": null,
  "custom_attribute_max_value": null
}
```

