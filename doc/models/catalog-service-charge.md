
# Catalog Service Charge

A service charge in the Catalog object model. Note that `AUTO_GRATUITY` service charge can be applied only in one location.

## Structure

`CatalogServiceCharge`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | The name of the service charge. | getName(): ?string | setName(?string name): void |
| `percentage` | `?string` | Optional | The percentage of the service charge in decimal form without the `"%"` sign, using a `'.'`<br>as the decimal separator. For example, a value of `7.5` corresponds to 7.5%. | getPercentage(): ?string | setPercentage(?string percentage): void |
| `type` | [`?string (CatalogServiceChargeType)`](../../doc/models/catalog-service-charge-type.md) | Optional | Determines service charge type | getType(): ?string | setType(?string type): void |
| `taxable` | `?bool` | Optional | Whether the service charge is taxable. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `calculationPhase` | [`?string (CatalogServiceChargeCalculationPhase)`](../../doc/models/catalog-service-charge-calculation-phase.md) | Optional | Determines service charge calculation phase | getCalculationPhase(): ?string | setCalculationPhase(?string calculationPhase): void |
| `minimumSeatCount` | `?int` | Optional | The minimum seat count for automatic application.<br>Surcharges can be manually applied regardless of seat count. | getMinimumSeatCount(): ?int | setMinimumSeatCount(?int minimumSeatCount): void |
| `autoEnableType` | [`?string (CatalogServiceChargeAutoEnableType)`](../../doc/models/catalog-service-charge-auto-enable-type.md) | Optional | Determines service charge type | getAutoEnableType(): ?string | setAutoEnableType(?string autoEnableType): void |
| `amountMoney` | [`?Money`](../../doc/models/money.md) | Optional | Represents an amount of money. `Money` fields can be signed or unsigned.<br>Fields that do not explicitly define whether they are signed or unsigned are<br>considered unsigned and can only hold positive amounts. For signed fields, the<br>sign of the value indicates the purpose of the money transfer. See<br>[Working with Monetary Amounts](https://developer.squareup.com/docs/build-basics/working-with-monetary-amounts)<br>for more information. | getAmountMoney(): ?Money | setAmountMoney(?Money amountMoney): void |
| `labelColor` | `?string` | Optional | The color of the discount display label in the Square Point of Sale app. This must be a valid hex color code. | getLabelColor(): ?string | setLabelColor(?string labelColor): void |
| `treatmentType` | [`?string (CatalogServiceChargeTreatmentType)`](../../doc/models/catalog-service-charge-treatment-type.md) | Optional | Determines service charge treatment type | getTreatmentType(): ?string | setTreatmentType(?string treatmentType): void |

## Example (as JSON)

```json
{
  "name": null,
  "percentage": null,
  "type": null,
  "taxable": null,
  "calculation_phase": null,
  "minimum_seat_count": null,
  "auto_enable_type": null,
  "amount_money": null,
  "label_color": null,
  "treatment_type": null
}
```

