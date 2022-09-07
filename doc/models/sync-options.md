
# Sync Options

## Structure

`SyncOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `searchXlfLocations` | `?bool` | Optional | Whether to expand query criteria to include cross-location fulfillment locations.<br>There's a slight performance hit compared to not. | getSearchXlfLocations(): ?bool | setSearchXlfLocations(?bool searchXlfLocations): void |
| `onlyFulfillmentOrders` | `?bool` | Optional | Return only orders that have fulfillments, whether single-location or cross-location. | getOnlyFulfillmentOrders(): ?bool | setOnlyFulfillmentOrders(?bool onlyFulfillmentOrders): void |

## Example (as JSON)

```json
{
  "search_xlf_locations": null,
  "only_fulfillment_orders": null
}
```

