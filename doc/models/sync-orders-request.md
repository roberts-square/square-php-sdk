
# Sync Orders Request

Return orders for the given merchant

## Structure

`SyncOrdersRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `locationIds` | `?(string[])` | Optional | The location IDs for the orders to query. All locations must belong to<br>the same merchant.<br><br>Min: 1 location ID.<br><br>Max: 10 location IDs. | getLocationIds(): ?array | setLocationIds(?array locationIds): void |
| `cursor` | `?string` | Optional | A cursor returned by a previous call to this endpoint.<br>Provide this cursor to retrieve results since the previous sync.<br>If not provided, a cursor is synthesized for the current time, meaning the result set will most<br>likely be empty; however, the cursor in the response can then be used to sync new orders going<br>forward. | getCursor(): ?string | setCursor(?string cursor): void |
| `softLimit` | `?int` | Optional | The requested maximum number of results to be returned in a single page. It is<br>possible to receive fewer results than the specified limit on a given page. It is also possible<br>to get more than this number of results depending on the underlying database retrievals.<br>Default: `500`<br>**Constraints**: `>= 1` | getSoftLimit(): ?int | setSoftLimit(?int softLimit): void |

## Example (as JSON)

```json
{
  "cursor": "",
  "location_ids": [
    "057P5VYJ4A5X1",
    "18YC4JDH91E1H"
  ],
  "soft_limit": 3
}
```

