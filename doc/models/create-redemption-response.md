
# Create Redemption Response

## Structure

`CreateRedemptionResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redemption` | [`?Redemption`](../../doc/models/redemption.md) | Optional | Represents the application of a `DiscountCode` to an order. | getRedemption(): ?Redemption | setRedemption(?Redemption redemption): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "redemption": null,
  "errors": null
}
```

