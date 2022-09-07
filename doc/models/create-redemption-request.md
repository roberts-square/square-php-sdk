
# Create Redemption Request

## Structure

`CreateRedemptionRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `redemption` | [`Redemption`](../../doc/models/redemption.md) | Required | Represents the application of a `DiscountCode` to an order. | getRedemption(): Redemption | setRedemption(Redemption redemption): void |
| `idempotencyKey` | `string` | Required | A unique string that identifies the `CreateRedemption` request.<br>If you do not provide a unique string (or you provide an empty<br>string as the value), the endpoint treats each request as<br>independent.<br><br>For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-apis/idempotency).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `192` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |

## Example (as JSON)

```json
{
  "redemption": {
    "discount_code_id": null,
    "order_id": null,
    "state": null
  },
  "idempotency_key": "idempotency_key6"
}
```

