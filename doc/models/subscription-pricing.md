
# Subscription Pricing

Describes the pricing for the subscription.

## Structure

`SubscriptionPricing`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `type` | [`?string (SubscriptionPricingType)`](../../doc/models/subscription-pricing-type.md) | Optional | Determines the pricing of a [Subscription](../../doc/models/subscription.md) | getType(): ?string | setType(?string type): void |
| `price` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getPrice(): ?Money | setPrice(?Money price): void |
| `discountIds` | `?(string[])` | Optional | The ids of the discount catalog objects | getDiscountIds(): ?array | setDiscountIds(?array discountIds): void |

## Example (as JSON)

```json
{
  "type": null,
  "price": null,
  "discount_ids": null
}
```

