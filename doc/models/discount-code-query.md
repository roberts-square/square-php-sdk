
# Discount Code Query

Represents a query used to search for `DiscountCode` resources.

## Structure

`DiscountCodeQuery`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `filter` | [`DiscountCodeFilter`](../../doc/models/discount-code-filter.md) | Required | Filter parameters used to search for discount codes. | getFilter(): DiscountCodeFilter | setFilter(DiscountCodeFilter filter): void |

## Example (as JSON)

```json
{
  "filter": {
    "code": null,
    "exclude_invalid": null,
    "exclude_fully_redeemed": null,
    "customer_id": null
  }
}
```

