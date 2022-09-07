
# Sync Orders Performance Info

## Structure

`SyncOrdersPerformanceInfo`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `fetchesPerformed` | `?int` | Optional | - | getFetchesPerformed(): ?int | setFetchesPerformed(?int fetchesPerformed): void |
| `totalFetchTimeMillis` | `?int` | Optional | - | getTotalFetchTimeMillis(): ?int | setTotalFetchTimeMillis(?int totalFetchTimeMillis): void |
| `allFetchTimesMillis` | `?(int[])` | Optional | - | getAllFetchTimesMillis(): ?array | setAllFetchTimesMillis(?array allFetchTimesMillis): void |
| `executedQueries` | `?(string[])` | Optional | - | getExecutedQueries(): ?array | setExecutedQueries(?array executedQueries): void |
| `queryResponseRows` | `?int` | Optional | - | getQueryResponseRows(): ?int | setQueryResponseRows(?int queryResponseRows): void |
| `filteredRows` | `?int` | Optional | - | getFilteredRows(): ?int | setFilteredRows(?int filteredRows): void |

## Example (as JSON)

```json
{
  "fetches_performed": null,
  "total_fetch_time_millis": null,
  "all_fetch_times_millis": null,
  "executed_queries": null,
  "query_response_rows": null,
  "filtered_rows": null
}
```

