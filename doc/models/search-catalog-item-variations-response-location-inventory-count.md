
# Search Catalog Item Variations Response Location Inventory Count

Contains the inventory count for a specific variation at a specific location.

## Structure

`SearchCatalogItemVariationsResponseLocationInventoryCount`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `variationId` | `?string` | Optional | The variation for this inventory count. | getVariationId(): ?string | setVariationId(?string variationId): void |
| `locationId` | `?string` | Optional | The location for this inventory count. | getLocationId(): ?string | setLocationId(?string locationId): void |
| `count` | `?string` | Optional | Inventory count as a decimal string. Supports up to 5 digits after the decimal point. | getCount(): ?string | setCount(?string count): void |
| `availableCount` | `?string` | Optional | Available count as a decimal string. Supports up to 5 digits after the decimal point. Will be set when merchant is feature flagged in CommittedInventoryForInvoices | getAvailableCount(): ?string | setAvailableCount(?string availableCount): void |
| `committedCount` | `?string` | Optional | Committed count as a decimal string. Supports up to 5 digits after the decimal point. Will be set when merchant is feature flagged in CommittedInventoryForInvoices | getCommittedCount(): ?string | setCommittedCount(?string committedCount): void |

## Example (as JSON)

```json
{
  "variation_id": null,
  "location_id": null,
  "count": null,
  "available_count": null,
  "committed_count": null
}
```

