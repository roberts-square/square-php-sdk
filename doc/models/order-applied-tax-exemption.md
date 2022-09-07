
# Order Applied Tax Exemption

Represents a tax exemption that applies to one or more line item in the order.

## Structure

`OrderAppliedTaxExemption`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | A unique ID that identifies the applied tax exemption only<br>within this order.<br>**Constraints**: *Maximum Length*: `60` | getUid(): ?string | setUid(?string uid): void |
| `taxExemptionUid` | `string` | Required | The `uid` of the tax exemption for which this applied tax<br>exemption represents.<br>It must reference a tax exemption present in the<br>`order.tax_exemptions` field.<br>This field is immutable. To change which tax exemption apply to a<br>line item, delete and add a new `OrderLineItemAppliedTaxExemption`.<br>**Constraints**: *Minimum Length*: `1`, *Maximum Length*: `60` | getTaxExemptionUid(): string | setTaxExemptionUid(string taxExemptionUid): void |

## Example (as JSON)

```json
{
  "uid": null,
  "tax_exemption_uid": "tax_exemption_uid6"
}
```

