
# Update Discount Code Request

## Structure

`UpdateDiscountCodeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `discountCode` | [`DiscountCode`](../../doc/models/discount-code.md) | Required | Associates a discount to a code issued to customers.<br>The pricing rule referenced by this resource determines how and what is discounted. | getDiscountCode(): DiscountCode | setDiscountCode(DiscountCode discountCode): void |

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
  }
}
```

