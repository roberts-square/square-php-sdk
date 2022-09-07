
# Create Discount Code Request

## Structure

`CreateDiscountCodeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `discountCode` | [`DiscountCode`](../../doc/models/discount-code.md) | Required | Associates a discount to a code issued to customers.<br>The pricing rule referenced by this resource determines how and what is discounted. | getDiscountCode(): DiscountCode | setDiscountCode(DiscountCode discountCode): void |
| `idempotencyKey` | `string` | Required | A unique string that identifies the `CreateDiscountCode` request.<br>If you do not provide a unique string (or you provide an empty<br>string as the value), the endpoint treats each request as<br>independent.<br><br>For more information, see [Idempotency](https://developer.squareup.com/docs/working-with-apis/idempotency).<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `192` | getIdempotencyKey(): string | setIdempotencyKey(string idempotencyKey): void |

## Example (as JSON)

```json
{
  "discount_code": {
    "code": null,
    "pricing_rule_id": null,
    "max_redemptions": null,
    "valid_from": null,
    "expires_at": null,
    "customer_id": null
  },
  "idempotency_key": "idempotency_key6"
}
```

