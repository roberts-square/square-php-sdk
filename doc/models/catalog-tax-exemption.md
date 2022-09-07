
# Catalog Tax Exemption

A conditional tax exemption for non-taxable goods and services. Supported conditions include
`dining_option`, `max_total_amount`, `min_item_price` and `max_item_price`.
Exactly one condition is allowed for a tax exemption.

## Structure

`CatalogTaxExemption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The name of the tax exemption. | getName(): ?string | setName(?string name): void |
| `diningOptionIds` | `?(string[])` | Optional | The ID of a dining option to which the tax exemption is applicable.<br>For example, if the dining option ID is `ToGo`, the tax will not be applied on dining orders of the `ToGo` option. | getDiningOptionIds(): ?array | setDiningOptionIds(?array diningOptionIds): void |
| `maxTotalAmountMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getMaxTotalAmountMoney(): ?Money | setMaxTotalAmountMoney(?Money maxTotalAmountMoney): void |
| `minItemPriceMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getMinItemPriceMoney(): ?Money | setMinItemPriceMoney(?Money minItemPriceMoney): void |
| `maxItemPriceMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getMaxItemPriceMoney(): ?Money | setMaxItemPriceMoney(?Money maxItemPriceMoney): void |
| `taxId` | `string` | Required | The unique ID of the `CatalogTax` to which this tax exemption applies. | getTaxId(): string | setTaxId(string taxId): void |
| `exemptProductSetId` | `?string` | Optional | The ID of the product set whose member products are qualified for this tax exemption.<br>When you apply the `max_total_amount` filter, the amount is the total price of only<br>the items qualifying for the exemption.<br><br>For example, suppose that `exempt_product_set_id` refers to a product set containing a category<br>of "coffee" and an item of "bagel" with a `max_total_amount` of $4.00. If a shopping cart has a $1.50<br>coffee, a $2.00 bagel, and a $10.00 t-shirt, the coffee and bagel are tax free, because they are qualified<br>items and the total price of the coffee and bagel is $3.50, below the maximum total amount. | getExemptProductSetId(): ?string | setExemptProductSetId(?string exemptProductSetId): void |
| `appliesToCustomAmounts` | `?bool` | Optional | Whether tax exemption applies to custom amount line items | getAppliesToCustomAmounts(): ?bool | setAppliesToCustomAmounts(?bool appliesToCustomAmounts): void |
| `hasDiningOptionPredicate` | `?bool` | Optional | Whether tax exemption has dining option predicate. This field should always be internal only | getHasDiningOptionPredicate(): ?bool | setHasDiningOptionPredicate(?bool hasDiningOptionPredicate): void |

## Example (as JSON)

```json
{
  "name": null,
  "dining_option_ids": null,
  "max_total_amount_money": null,
  "min_item_price_money": null,
  "max_item_price_money": null,
  "tax_id": "tax_id0",
  "exempt_product_set_id": null,
  "applies_to_custom_amounts": null
}
```

