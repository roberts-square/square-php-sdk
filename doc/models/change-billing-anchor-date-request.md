
# Change Billing Anchor Date Request

Defines input parameters in a request to the
[ChangeBillingAnchorDate](../../doc/apis/subscriptions.md#change-billing-anchor-date) endpoint.

## Structure

`ChangeBillingAnchorDateRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `monthlyBillingAnchorDate` | `?int` | Optional | The anchor day for the billing cycle. | getMonthlyBillingAnchorDate(): ?int | setMonthlyBillingAnchorDate(?int monthlyBillingAnchorDate): void |

## Example (as JSON)

```json
{
  "monthly_billing_anchor_date": null
}
```

