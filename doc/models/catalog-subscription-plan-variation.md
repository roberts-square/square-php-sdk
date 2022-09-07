
# Catalog Subscription Plan Variation

Describes a subscription plan variation. All of the fields were copied from the original Subscription Plan

## Structure

`CatalogSubscriptionPlanVariation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The name of the plan variation. | getName(): string | setName(string name): void |
| `phases` | [`SubscriptionPhase[]`](../../doc/models/subscription-phase.md) | Required | A list of SubscriptionPhase containing the [SubscriptionPhase](../../doc/models/subscription-phase.md) for this plan. | getPhases(): array | setPhases(array phases): void |
| `taxInfo` | [`?SubscriptionTaxInfo`](../../doc/models/subscription-tax-info.md) | Optional | Describes the information to be used when calculating taxes for subscriptions. | getTaxInfo(): ?SubscriptionTaxInfo | setTaxInfo(?SubscriptionTaxInfo taxInfo): void |
| `configuration` | [`?SubscriptionConfiguration`](../../doc/models/subscription-configuration.md) | Optional | Describes the configuration for the subscription. | getConfiguration(): ?SubscriptionConfiguration | setConfiguration(?SubscriptionConfiguration configuration): void |
| `subscriptionPlanId` | `?string` | Optional | The id of the subscription plan, if there is one. | getSubscriptionPlanId(): ?string | setSubscriptionPlanId(?string subscriptionPlanId): void |
| `monthlyBillingAnchorDate` | `?int` | Optional | The day of the month the billing period starts.<br>**Constraints**: `>= 1`, `<= 31` | getMonthlyBillingAnchorDate(): ?int | setMonthlyBillingAnchorDate(?int monthlyBillingAnchorDate): void |
| `canProrate` | `?bool` | Optional | Whether bills for this plan can be split for proration. | getCanProrate(): ?bool | setCanProrate(?bool canProrate): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "phases": [
    {
      "uid": null,
      "cadence": "EVERY_FOUR_MONTHS",
      "periods": null,
      "recurring_price_money": null,
      "ordinal": null,
      "pricing": null
    },
    {
      "uid": null,
      "cadence": "QUARTERLY",
      "periods": null,
      "recurring_price_money": null,
      "ordinal": null,
      "pricing": null
    }
  ],
  "tax_info": null,
  "configuration": null,
  "subscription_plan_id": null,
  "monthly_billing_anchor_date": null,
  "can_prorate": null
}
```

