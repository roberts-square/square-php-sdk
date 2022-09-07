
# Sync Orders Debug Options

## Structure

`SyncOrdersDebugOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `collectPerformanceData` | `?bool` | Optional | - | getCollectPerformanceData(): ?bool | setCollectPerformanceData(?bool collectPerformanceData): void |
| `useMerchantScopedQuery` | `?bool` | Optional | - | getUseMerchantScopedQuery(): ?bool | setUseMerchantScopedQuery(?bool useMerchantScopedQuery): void |
| `useLocationScopedQuery` | `?bool` | Optional | - | getUseLocationScopedQuery(): ?bool | setUseLocationScopedQuery(?bool useLocationScopedQuery): void |
| `returnOrderIdsOnly` | `?bool` | Optional | - | getReturnOrderIdsOnly(): ?bool | setReturnOrderIdsOnly(?bool returnOrderIdsOnly): void |
| `expireCursors` | `?bool` | Optional | - | getExpireCursors(): ?bool | setExpireCursors(?bool expireCursors): void |
| `startAtBeginningOfTime` | `?bool` | Optional | - | getStartAtBeginningOfTime(): ?bool | setStartAtBeginningOfTime(?bool startAtBeginningOfTime): void |
| `maxResultsPerFetch` | `?int` | Optional | - | getMaxResultsPerFetch(): ?int | setMaxResultsPerFetch(?int maxResultsPerFetch): void |

## Example (as JSON)

```json
{
  "collect_performance_data": null,
  "use_merchant_scoped_query": null,
  "use_location_scoped_query": null,
  "return_order_ids_only": null,
  "expire_cursors": null,
  "start_at_beginning_of_time": null,
  "max_results_per_fetch": null
}
```

