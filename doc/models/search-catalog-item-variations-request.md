
# Search Catalog Item Variations Request

Defines the request body for the [SearchCatalogItemVariations](../../doc/apis/catalog.md#search-catalog-item-variations) endpoint.

## Structure

`SearchCatalogItemVariationsRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `textFilter` | [`?(MultiFieldTextFilter[])`](../../doc/models/multi-field-text-filter.md) | Optional | The text filters to apply to this search, and the attributes to which they should be applied.<br>Defaults to all available attributes. | getTextFilter(): ?array | setTextFilter(?array textFilter): void |
| `categoryIds` | `?(string[])` | Optional | The category id query expression to return item variations containing the specified category tokens. | getCategoryIds(): ?array | setCategoryIds(?array categoryIds): void |
| `stockLevels` | [`?(string[]) (StockLevel)`](../../doc/models/stock-level.md) | Optional | The stock-level query expression to return item variations with the specified stock levels. | getStockLevels(): ?array | setStockLevels(?array stockLevels): void |
| `enabledLocationIds` | `?(string[])` | Optional | The enabled-location query expression to return item variations having the specified enabled locations. | getEnabledLocationIds(): ?array | setEnabledLocationIds(?array enabledLocationIds): void |
| `sort` | [`?Sort`](../../doc/models/sort.md) | Optional | Specifies how the variations returned by the search are sorted by designating a sort field and a sort order. | getSort(): ?Sort | setSort(?Sort sort): void |
| `customAttributeFilters` | [`?(CustomAttributeFilter[])`](../../doc/models/custom-attribute-filter.md) | Optional | The customer-attribute filter to return items or item variations matching the specified custom attribute expressions.<br>A maximum number of 10 custom attribute expressions are supported in a single call to the SearchCatalogItemVariations endpoint. | getCustomAttributeFilters(): ?array | setCustomAttributeFilters(?array customAttributeFilters): void |
| `trackInventoryLocationIds` | `?(string[])` | Optional | The list of locations for which to only return variations that have inventory tracking enabled. | getTrackInventoryLocationIds(): ?array | setTrackInventoryLocationIds(?array trackInventoryLocationIds): void |
| `includeRelatedObjects` | [`?(string[]) (CatalogObjectType)`](../../doc/models/catalog-object-type.md) | Optional | If present, fetches and includes unsorted, adjacent catalog objects in the response. Acceptable value: ITEM. | getIncludeRelatedObjects(): ?array | setIncludeRelatedObjects(?array includeRelatedObjects): void |
| `limit` | `?int` | Optional | The maximum number of results to return per page. The default value is 100.<br>**Constraints**: `<= 100` | getLimit(): ?int | setLimit(?int limit): void |
| `cursor` | `?string` | Optional | The pagination token, returned in the previous response, used to fetch the next batch of pending results. | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "category_ids": [
    "COFFEE_CATEGORY_ID"
  ],
  "enabled_location_ids": [
    "ATL_LOCATION_ID",
    "NYC_LOCATION_ID"
  ],
  "include_related_objects": [
    "ITEM"
  ],
  "limit": 100,
  "sort": {
    "field": "ITEM_VARIATION_INVENTORY_COUNT",
    "location_id": "ATL_LOCATION_ID",
    "order": "DESC"
  },
  "text_filter": [
    {
      "fields": {
        "any": [
          "ITEM_NAME",
          "ITEM_VARIATION_NAME"
        ]
      },
      "text_filter": "coffee"
    }
  ],
  "track_inventory_location_ids": [
    "ATL_LOCATION_ID",
    "NYC_LOCATION_ID"
  ]
}
```

