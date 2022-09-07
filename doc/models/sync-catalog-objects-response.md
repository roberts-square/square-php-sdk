
# Sync Catalog Objects Response

## Structure

`SyncCatalogObjectsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Any errors that occurred during the request. | getErrors(): ?array | setErrors(?array errors): void |
| `cursor` | `?string` | Optional | The pagination cursor to be used in a subsequent request. If unset, this is the final response.<br>See [Pagination](https://developer.squareup.com/docs/basics/api101/pagination) for more information. | getCursor(): ?string | setCursor(?string cursor): void |
| `objects` | [`?(CatalogObject[])`](../../doc/models/catalog-object.md) | Optional | The CatalogObjects returned. | getObjects(): ?array | setObjects(?array objects): void |
| `relatedObjects` | [`?(CatalogObject[])`](../../doc/models/catalog-object.md) | Optional | A list of CatalogObjects referenced by the objects in the `objects` field. | getRelatedObjects(): ?array | setRelatedObjects(?array relatedObjects): void |
| `latestTime` | `?string` | Optional | When the associated product catalog was last updated. | getLatestTime(): ?string | setLatestTime(?string latestTime): void |

## Example (as JSON)

```json
{
  "latest_time": "1639496492337",
  "objects": [
    {
      "id": "X5DZ5NWWAQ44CKBLKIFQGOWK",
      "is_deleted": false,
      "item_data": {
        "category_id": "E7CLE5RZZ744BHWVQQEAHI2C",
        "description": "A delicious blend of black tea.",
        "name": "Tea - Black",
        "product_type": "REGULAR",
        "tax_ids": [
          "ZXITPM6RWHZ7GZ7EIP3YKECM"
        ],
        "variations": [
          {
            "id": "5GSZPX6EU7MM75S57OONG3V5",
            "is_deleted": false,
            "item_variation_data": {
              "item_id": "X5DZ5NWWAQ44CKBLKIFQGOWK",
              "name": "Regular",
              "ordinal": 1,
              "price_money": {
                "amount": 150,
                "currency": "USD"
              },
              "pricing_type": "FIXED_PRICING"
            },
            "present_at_all_locations": true,
            "type": "ITEM_VARIATION",
            "updated_at": "2021-12-14T15:41:32.337Z",
            "version": 1639496492337
          },
          {
            "id": "XVLBN7DU6JTWHJTG5F265B43",
            "is_deleted": true,
            "type": "ITEM_VARIATION",
            "updated_at": "2021-12-14T15:41:32.337Z",
            "version": 1639496492337
          }
        ],
        "visibility": "PRIVATE"
      },
      "present_at_all_locations": true,
      "type": "ITEM",
      "updated_at": "2021-12-14T15:41:32.337Z",
      "version": 1639496492337
    },
    {
      "id": "NNNEM3LA656Q46NXLWCNI7S5",
      "is_deleted": true,
      "type": "ITEM",
      "updated_at": "2021-12-14T15:41:32.337Z",
      "version": 1639496492337
    }
  ]
}
```

