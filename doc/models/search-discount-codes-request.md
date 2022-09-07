
# Search Discount Codes Request

## Structure

`SearchDiscountCodesRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `query` | [`DiscountCodeQuery`](../../doc/models/discount-code-query.md) | Required | Represents a query used to search for `DiscountCode` resources. | getQuery(): DiscountCodeQuery | setQuery(DiscountCodeQuery query): void |
| `cursor` | `?string` | Optional | When a response is truncated, it includes a cursor that you can use in a<br>subsequent request to fetch the next set of discount codes.<br>If it is empty, the response is final. | getCursor(): ?string | setCursor(?string cursor): void |
| `limit` | `?int` | Optional | The maximum number of discount codes to return (1000 is the maximum `limit`).<br>If the specified limit is negative, zero, or higher than the maximum limit, it is<br>ignored. | getLimit(): ?int | setLimit(?int limit): void |

## Example (as JSON)

```json
{
  "query": {
    "filter": {
      "code": null,
      "exclude_invalid": null,
      "exclude_fully_redeemed": null,
      "customer_id": null
    }
  },
  "cursor": null,
  "limit": null
}
```

