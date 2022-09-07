
# Search Catalog Item Variations Response

Defines the response body returned from the [SearchCatalogItemVariations](../../doc/apis/catalog.md#search-catalog-item-variations) endpoint.

## Structure

`SearchCatalogItemVariationsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `itemVariations` | [`?(CatalogObject[])`](../../doc/models/catalog-object.md) | Optional | Returned variations matching the specified query expressions. | getItemVariations(): ?array | setItemVariations(?array itemVariations): void |
| `relatedObjects` | [`?(CatalogObject[])`](../../doc/models/catalog-object.md) | Optional | A list of CatalogObjects related to the variations returned. include_related_objects must be set on the request for this field to be populated. | getRelatedObjects(): ?array | setRelatedObjects(?array relatedObjects): void |
| `inventoryCounts` | [`?(SearchCatalogItemVariationsResponseLocationInventoryCount[])`](../../doc/models/search-catalog-item-variations-response-location-inventory-count.md) | Optional | A list of LocationInventoryCount objects containing inventory count information on a per-variation per-location basis. | getInventoryCounts(): ?array | setInventoryCounts(?array inventoryCounts): void |
| `cursor` | `?string` | Optional | Pagination token used in the next request to return more of the search result. Only present if there are more objects to return. | getCursor(): ?string | setCursor(?string cursor): void |

## Example (as JSON)

```json
{
  "inventory_counts": [
    {
      "count": "34",
      "location_id": "ATL_LOCATION_ID",
      "variation_id": "LBHSVD65G6MXCNYV2AP2TYPP"
    },
    {
      "count": "9",
      "location_id": "NYC_LOCATION_ID",
      "variation_id": "LBHSVD65G6MXCNYV2AP2TYPP"
    },
    {
      "count": "10",
      "location_id": "ATL_LOCATION_ID",
      "variation_id": "AH2XNLUYOV4RCVBSJX66F7RV"
    },
    {
      "count": "14",
      "location_id": "NYC_LOCATION_ID",
      "variation_id": "AH2XNLUYOV4RCVBSJX66F7RV"
    }
  ],
  "item_variations": [
    {
      "id": "LBHSVD65G6MXCNYV2AP2TYPP",
      "is_deleted": false,
      "item_variation_data": {
        "item_id": "QRIAAXI7PEBG6WDEX6DG6WHL",
        "name": "Small",
        "price_money": {
          "amount": 300,
          "currency": "USD"
        },
        "pricing_type": "FIXED_PRICING"
      },
      "present_at_all_locations": true,
      "type": "ITEM_VARIATION",
      "updated_at": "2020-05-29T20:38:28.304Z",
      "version": 1590784708304
    },
    {
      "id": "AH2XNLUYOV4RCVBSJX66F7RV",
      "is_deleted": false,
      "item_variation_data": {
        "inventory_alert_threshold": 12,
        "inventory_alert_type": "LOW_QUANTITY",
        "item_id": "QRIAAXI7PEBG6WDEX6DG6WHL",
        "name": "Large",
        "price_money": {
          "amount": 350,
          "currency": "USD"
        },
        "pricing_type": "FIXED_PRICING"
      },
      "present_at_all_locations": true,
      "type": "ITEM_VARIATION",
      "updated_at": "2020-05-29T20:58:34.455Z",
      "version": 1590785914455
    }
  ],
  "related_objects": [
    {
      "id": "QRIAAXI7PEBG6WDEX6DG6WHL",
      "is_deleted": false,
      "item_data": {
        "abbreviation": "Co",
        "description": "Coffee Drink",
        "image_ids": [
          "BXI7A6WDRIAGGQE6WHPEX6DL"
        ],
        "name": "Coffee",
        "product_type": "REGULAR"
      },
      "present_at_all_locations": true,
      "type": "ITEM",
      "updated_at": "2020-05-29T22:25:47.216Z",
      "version": 1590791147216
    }
  ]
}
```

