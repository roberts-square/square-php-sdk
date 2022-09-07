
# Order Pricing Options

Pricing options for an order. The options affect how the order's price is calculated.
They can be used, for example, to apply automatic price adjustments that are based on preconfigured
[pricing rules](../../doc/models/catalog-pricing-rule.md).

## Structure

`OrderPricingOptions`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `autoApplyDiscounts` | `?bool` | Optional | The option to determine whether pricing rule-based<br>discounts are automatically applied to an order. | getAutoApplyDiscounts(): ?bool | setAutoApplyDiscounts(?bool autoApplyDiscounts): void |
| `autoApplyTaxes` | `?bool` | Optional | The option to determine whether rule-based taxes are automatically<br>applied to an order when the criteria of the corresponding rules are met. | getAutoApplyTaxes(): ?bool | setAutoApplyTaxes(?bool autoApplyTaxes): void |
| `automaticTaxSource` | [`?string (OrderPricingOptionsAutomaticTaxSource)`](../../doc/models/order-pricing-options-automatic-tax-source.md) | Optional | - | getAutomaticTaxSource(): ?string | setAutomaticTaxSource(?string automaticTaxSource): void |
| `autoApplyServiceCharges` | `?bool` | Optional | The option to determine whether pricing rule-based<br>service charges are automatically applied to an order. | getAutoApplyServiceCharges(): ?bool | setAutoApplyServiceCharges(?bool autoApplyServiceCharges): void |

## Example (as JSON)

```json
{
  "auto_apply_discounts": null,
  "auto_apply_taxes": null,
  "automatic_tax_source": null,
  "auto_apply_service_charges": null
}
```

