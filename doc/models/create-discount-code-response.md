
# Create Discount Code Response

## Structure

`CreateDiscountCodeResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `discountCode` | [`?DiscountCode`](../../doc/models/discount-code.md) | Optional | Associates a discount to a code issued to customers.<br>The pricing rule referenced by this resource determines how and what is discounted. | getDiscountCode(): ?DiscountCode | setDiscountCode(?DiscountCode discountCode): void |
| `errors` | [`?(Error[])`](../../doc/models/error.md) | Optional | Information about errors encountered during the request. | getErrors(): ?array | setErrors(?array errors): void |

## Example (as JSON)

```json
{
  "discount_code": null,
  "errors": null
}
```

