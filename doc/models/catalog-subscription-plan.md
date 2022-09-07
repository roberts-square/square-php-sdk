
# Catalog Subscription Plan

Describes a subscription plan. For more information, see
[Set Up and Manage a Subscription Plan](https://developer.squareup.com/docs/subscriptions-api/setup-plan).

## Structure

`CatalogSubscriptionPlan`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The name of the plan. | getName(): string | setName(string name): void |
| `phases` | [`?(SubscriptionPhase[])`](../../doc/models/subscription-phase.md) | Optional | A list of SubscriptionPhase containing the [SubscriptionPhase](../../doc/models/subscription-phase.md) for this plan.<br>This field is required. Not including this field will throw a REQUIRED_FIELD_MISSING error | getPhases(): ?array | setPhases(?array phases): void |
| `taxInfo` | [`?SubscriptionTaxInfo`](../../doc/models/subscription-tax-info.md) | Optional | Describes the information to be used when calculating taxes for subscriptions. | getTaxInfo(): ?SubscriptionTaxInfo | setTaxInfo(?SubscriptionTaxInfo taxInfo): void |
| `configuration` | [`?SubscriptionConfiguration`](../../doc/models/subscription-configuration.md) | Optional | Describes the configuration for the subscription. | getConfiguration(): ?SubscriptionConfiguration | setConfiguration(?SubscriptionConfiguration configuration): void |
| `monthlyBillingAnchorDate` | `?int` | Optional | The day of the month the billing period starts.<br>**Constraints**: `>= 1`, `<= 31` | getMonthlyBillingAnchorDate(): ?int | setMonthlyBillingAnchorDate(?int monthlyBillingAnchorDate): void |
| `canProrate` | `?bool` | Optional | Whether bills for this plan can be split for proration. | getCanProrate(): ?bool | setCanProrate(?bool canProrate): void |
| `subscriptionPlanVariations` | [`?(CatalogObject[])`](../../doc/models/catalog-object.md) | Optional | The list of subscription plan variations available for this product | getSubscriptionPlanVariations(): ?array | setSubscriptionPlanVariations(?array subscriptionPlanVariations): void |
| `eligibleItemIds` | `?(string[])` | Optional | The list of IDs of `CatalogItems` that are eligible for subscription by this SubscriptionPlan's variations. | getEligibleItemIds(): ?array | setEligibleItemIds(?array eligibleItemIds): void |
| `eligibleCategoryIds` | `?(string[])` | Optional | The list of IDs of `CatalogCategory` that are eligible for subscription by this SubscriptionPlan's variations. | getEligibleCategoryIds(): ?array | setEligibleCategoryIds(?array eligibleCategoryIds): void |
| `allItems` | `?bool` | Optional | If true, all items in the merchant's catalog are subscribable by this SubscriptionPlan. | getAllItems(): ?bool | setAllItems(?bool allItems): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "phases": null,
  "tax_info": null,
  "configuration": null,
  "monthly_billing_anchor_date": null,
  "can_prorate": null,
  "subscription_plan_variations": null,
  "eligible_item_ids": null,
  "eligible_category_ids": null,
  "all_items": null
}
```

