
# Sync Orders Bootstrap Request

The request does not have any required fields. When given no query criteria,
`SyncOrdersBootstrap` returns all Open Orders for all of the seller's locations newer than 1 month,
up to the default limit of 500. Additional results can be paginated supplying the cursor.

## Structure

`SyncOrdersBootstrapRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationIds` | `?(string[])` | Optional | The location IDs for the orders to query. All locations must belong to<br>the same merchant.<br><br>Min: 1 location ID.<br><br>Max: 10 location IDs. | getLocationIds(): ?array | setLocationIds(?array locationIds): void |
| `cursor` | `?string` | Optional | A nullable pagination cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve the next set of results.<br>For more information, see [Pagination](https://developer.squareup.com/docs/basics/api101/pagination). | getCursor(): ?string | setCursor(?string cursor): void |
| `limit` | `?int` | Optional | The maximum number of results to be returned in a single page. It is<br>possible to receive fewer results than the specified limit on a given page.<br><br>Default: `500`<br>**Constraints**: `>= 1` | getLimit(): ?int | setLimit(?int limit): void |
| `newerThan` | `?string` | Optional | Enables pagination to be restricted to newer than the supplied timestamp.<br>DEFAULT: 1 month prior. | getNewerThan(): ?string | setNewerThan(?string newerThan): void |

## Example (as JSON)

```json
{
  "limit": 500,
  "location_ids": [
    "057P5VYJ4A5X1",
    "18YC4JDH91E1H"
  ],
  "newer_than": "2021-11-01T00:00:00+00:00"
}
```

