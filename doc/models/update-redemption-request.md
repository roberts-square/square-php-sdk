
# Update Redemption Request

## Structure

`UpdateRedemptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redemption` | [`Redemption`](../../doc/models/redemption.md) | Required | Represents the application of a `DiscountCode` to an order. | getRedemption(): Redemption | setRedemption(Redemption redemption): void |

## Example (as JSON)

```json
{
  "redemption": {
    "discount_code_id": null,
    "order_id": null,
    "state": null
  }
}
```

