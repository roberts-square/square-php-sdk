
# Catalog Query Filtered Items

Supported query expressions to search for items or item variations.
When supplying any of the query expressions, be aware that newly created or updated
items or item variations may not appear in the search result if the search request
is submitted in 5 seconds or less after the items are created or updated. In this
case, the search result may include the items or item variations with old data if they
are updated, or the search result may not include the items or item variations at all
if they are newly created.

## Structure

`CatalogQueryFilteredItems`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `textFilter` | `?string` | Optional | The text query expression to search for items or item variations by<br>matching items' `name`, `abbreviation`, or `description` or item variations'<br>`name`, `sku` or `upc` attribute values against the specified text tokens. | getTextFilter(): ?string | setTextFilter(?string textFilter): void |
| `searchVendorCode` | `?bool` | Optional | The boolean expression to specify whether with the `text_filter` expression is also applied<br>to search for items or item variations to match seller's vendor codes against the<br>specified vendor code in `text_filter`. | getSearchVendorCode(): ?bool | setSearchVendorCode(?bool searchVendorCode): void |
| `categoryIds` | `?(string[])` | Optional | The category query expression to search for items or item variations by matching IDs<br>of their associated categories against the specified category IDs. | getCategoryIds(): ?array | setCategoryIds(?array categoryIds): void |
| `stockLevels` | [`?(string[]) (CatalogQueryFilteredItemsStockLevel)`](../../doc/models/catalog-query-filtered-items-stock-level.md) | Optional | A query expression to search for item or item variations by matching items' stock levels<br>against the specified stock levels.<br>See [CatalogQueryFilteredItemsStockLevel](#type-catalogqueryfiltereditemsstocklevel) for possible values | getStockLevels(): ?array | setStockLevels(?array stockLevels): void |
| `enabledLocationIds` | `?(string[])` | Optional | A query expression to search for items by matching IDs of items' enabled locations<br>against the specified location IDs. | getEnabledLocationIds(): ?array | setEnabledLocationIds(?array enabledLocationIds): void |
| `vendorIds` | `?(string[])` | Optional | A query expression to search for item or item variations by matching items' vendor<br>IDs against the specified vendor IDs. | getVendorIds(): ?array | setVendorIds(?array vendorIds): void |
| `productTypes` | [`?(string[]) (CatalogItemProductType)`](../../doc/models/catalog-item-product-type.md) | Optional | A query expression to search for items or item variations by matching items'<br>product types against the specified product types.<br>See [CatalogItemProductType](#type-catalogitemproducttype) for possible values | getProductTypes(): ?array | setProductTypes(?array productTypes): void |
| `customAttributeFilters` | [`?(CatalogQueryFilteredItemsCustomAttributeFilter[])`](../../doc/models/catalog-query-filtered-items-custom-attribute-filter.md) | Optional | One or more query expressions used to search by custom attributes to match all<br>of the specified query expressions. A maximum number of 10 custom attribute expressions<br>are supported in a call to the [SearchCatalogItems](../../doc/apis/catalog.md#search-catalog-items)<br>endpoint. | getCustomAttributeFilters(): ?array | setCustomAttributeFilters(?array customAttributeFilters): void |
| `doesNotExist` | [`?(string[]) (CatalogQueryFilteredItemsNullableAttribute)`](../../doc/models/catalog-query-filtered-items-nullable-attribute.md) | Optional | The query expression to return items or item variations if values of the specified<br>attributes matching an associated query expression or the specified attributes do not<br>exist.<br>See [CatalogQueryFilteredItemsNullableAttribute](#type-catalogqueryfiltereditemsnullableattribute) for possible values | getDoesNotExist(): ?array | setDoesNotExist(?array doesNotExist): void |
| `sortOrder` | [`?string (SortOrder)`](../../doc/models/sort-order.md) | Optional | The order (e.g., chronological or alphabetical) in which results from a request are returned. | getSortOrder(): ?string | setSortOrder(?string sortOrder): void |

## Example (as JSON)

```json
{
  "text_filter": null,
  "search_vendor_code": null,
  "category_ids": null,
  "stock_levels": null,
  "enabled_location_ids": null,
  "vendor_ids": null,
  "product_types": null,
  "custom_attribute_filters": null,
  "does_not_exist": null,
  "sort_order": null
}
```

